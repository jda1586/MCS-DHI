<?php

namespace DHI\Http\Controllers;

use Auth;
use DHI\UserTree;
use Hash;
use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;
use DHI\Jobs\NewUserMailJob;
use Input;
use Validator;
use DHI\User;

class MembersController extends Controller
{
    public function register()
    {
        return view('members.register');
    }

    public function store()
    {
//        dd(Input::all());
        $validator = Validator::make(Input::all(), [
            'pack' => 'required|exists:products,id',
            'name' => 'required|min:6|max:18',
            'lastname' => 'required',
            'birthday' => 'required',
            'user' => 'required|unique:users,user',
            'country' => 'required',
            'email' => 'required|confirmed',
            'password' => 'required|confirmed',
            'phone' => 'required',
        ]);
        if ($validator) {
            if ($new_user = User::create([
                'user' => Input::get('user'),
                'password' => Hash::make(Input::get('password')),
                'email' => Input::get('email'),
                'name' => Input::get('name'),
                'lastname' => Input::get('lastname'),
                'birthday' => Input::get('birthday'),
                'phone' => Input::get('phone'),
                'address' => Input::has('address') ? Input::get('address') : '---',
                'renew' => date('Y-m-d'),
                'product_id' => Input::get('pack'),
                'rol_id' => 1,
                'status' => 'pending',
                'skype' => Input::has('skype') ? Input::get('skype') : '',
                'whatsapp' => Input::has('whatsapp') ? Input::get('whatsapp') : '',
                'country_id' => Input::has('country') ? Input::get('country') : 0,
            ])
            ) {
                $new_user->trees()->create([
                    'parent_id' => 0,
                    'position' => 0,
                    'sponsor_id' => auth()->user()->id,
                    'matrix_parent' => 0,
                    'matrix_position' => 0,
                    'product_id' => Input::get('pack')
                ]);
                $new_user->wallets()->create([
                    'activation' => 0,
                    'commission' => 0,
                    'auction' => 0,
                    'utilities' => 0,
                    'balance' => 0,
                    'responsible_id' => 0,
                ]);

                //se llama el job mandar correo confirmacion
                $this->dispatch(new NewUserMailJob([
                    'name' => Input::get('name'),
                    'lastname' => Input::get('lastname'),
                    'user' => Input::get('user'),
                    'email' => Input::get('email'),
                    'password' => Input::get('password'),
                ]));

                return redirect()->route('members.payment', [
                    'id' => $new_user->id
                ]);
            }
        } else {
            return redirect()->route('members.register')->withErrors($validator);
        }
    }

    public function payment($id)
    {
        $new_user = User::find($id);
        if ($new_user) {
            if (auth()->user()->wallets->activation >= $new_user->product->price) {
                return view('members.payment', [
                    'new_user' => $new_user,
                ]);
            } else {
                return view('members.payment_out', [
                    'new_user' => $new_user,
                ]);
            }
        } else {
            return redirect()->route('members.organization');
        }
    }

    public function payment_store($id)
    {
        $new_user = User::find($id);
        if ($new_user && $new_user->status == 'pending') {
            $validator = Validator::make(Input::all(), [
                'pack' => 'required',
            ]);
            if ($validator->passes()) {
                $wallets = auth()->user()->wallets;
                if ($wallets->activation >= $new_user->product->price) {
                    auth()->user()->wallets()->decrement('activation', $new_user->product->price);
                    auth()->user()->wallets()->decrement('balance', $new_user->product->price);

                    $wallets = auth()->user()->wallets;

                    $user_movement = auth()->user()->movements()->create([
                        'type' => 'outcome',
                        'movement_id' => 1,
                        'from' => 'activation',
                        'to' => 'system',
                        'amount' => $new_user->product->price,
                        'balance' => $wallets->balance,
                        'note' => '-'
                    ]);

                    $new_user->payment()->create([
                        'amount' => $new_user->product->price,
                        'product_id' => $new_user->product->id,
                        'sponsor_id' => auth()->user()->id,
                        'user_movement_id' => $user_movement->id,
                    ]);

                    $new_user->status = 'active';
                    $new_user->save();

                    return redirect()->route('members.organization')->with('success', 'The account has been paid and is active.');
                } else {
                    return redirect()->route('members.organization')->with('error', 'You do not have sufficient funds');
                }
            } else {
                return redirect()->route('members.organization')->withErrors($validator);
            }
        } else {
            return redirect()->route('members.organization');
        }
    }

//    ruta temporal para vista de admin (mandar dinero a sus miembros )
    public function admin()
    {
        return view('admin.members');
    }

    public function organization()
    {
        $user = auth()->user();
//        usuario inilevel
        $goldU = UserTree::where('product_id', 3)->where('sponsor_id', $user->id)->count();
        $silverU = UserTree::where('product_id', 2)->where('sponsor_id', $user->id)->count();
        $bronzeU = UserTree::where('product_id', 1)->where('sponsor_id', $user->id)->count();
        $pending = User::where('status', 'pending')->get();
        $last = UserTree::where('sponsor_id', $user->id)->orderby('created_at', 'desc')->take(10)->get();
        return view('members.organization', ['goldU' => $goldU, 'silverU' => $silverU, 'bronzeU' => $bronzeU, 'pending' => $pending, 'last'=> $last]);
    }
}
