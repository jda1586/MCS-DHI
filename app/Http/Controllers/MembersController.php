<?php

namespace DHI\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;
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
        $validator = Validator::make(Input::all(), [
            'pack' => 'required|exists:products,id',
            'name' => 'required',
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
                'address' => Input::get('address'),
                'renew' => '0000-00-00',
                'product_id' => Input::get('product_id'),
                'rol_id' => Input::get('rol_id'),
                'status' => 'pending',
                'skype' => Input::has('skype') ? Input::get('skype') : '',
                'whatsapp' => Input::has('whatsapp') ? Input::get('whatsapp') : '',
            ])
            ) {
                $new_user->trees()->create([
                    'parent_id' => 0,
                    'position' => 0,
                    'sponsor_id' => auth()->user()->id,
                    'matrix_parent' => 0,
                    'product_id' => Input::get('product_id')
                ]);
                $new_user->wallets()->create([
                    'activation' => 0,
                    'commission' => 0,
                    'auction' => 0,
                    'utilities' => 0,
                    'balance' => 0,
                    'responsible_id' => 0,
                ]);

                return redirect()->route();
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
                return view('members.payment');
            } else {
                return view('members.payment_out');
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
}
