<?php
/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 17/01/2016
 * Time: 02:46 PM
 */

namespace DHI\Http\Controllers;

use DHI\UserWallet;
use Validator;
use DHI\Product;
use DHI\User;
use Input;
use DHI\Http\Requests;


class AdminMembersController extends Controller
{

    public function index()
    {
        return view('admin.members.index', [
            'appends' => [
                'packeg' => Input::has('packeg') ? Input::get('packeg') : null,
                'search' => Input::has('search') ? Input::get('search') : null,
            ],
            'packegs' => Product::where('status', 'active')->orderBy('id', 'DESC')->get(),
            'total' => User::all()->count(),
            'users' => User::where('id', '>', 1)
                ->where(function ($q) {
                    if (Input::has('search')) {
                        $q->where('user', 'like', '%' . Input::get('search') . '%')
                            ->orWhere('name', 'like', '%' . Input::get('search') . '%')
                            ->orWhere('lastname', 'like', '%' . Input::get('search') . '%')
                            ->orWhere('email', 'like', '%' . Input::get('search') . '%');
                    }
                    if (Input::has('search') && is_numeric(Input::get('search'))) {
                        $q->orWhere('id', Input::get('search'));
                    }
                    if (Input::has('packeg')) {
                        $q->orWhere('product_id', Input::get('packeg'));
                    }
                })
                ->orderBy('id', 'DESC')->paginate(50),
        ]);
    }


    public function addCredit($user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            return view('admin.members.addcredit', [
                'user' => $user,
                'movements' => $user->movements()->where('movement_id', 2)->take(20)->get(),
            ]);
        } else {
            return redirect()->route('admin.members.index');
        }
    }

    public function credit()
    {
//        dd('entro');
        $validator = Validator::make(Input::all(), [
            'user' => 'required|exists:users,user',
            'wallet' => 'required|string',
            'amount' => 'required|min:1',
            'reason' => 'required',
        ]);
//        dd($validator);
        if ($validator->passes()) {

            $user = User::where('user', Input::get('user'))->first();
            if ($user != null) {
                $wallet = UserWallet::where('user_id', '=', $user->id)->first();
                $user_movement = auth()->user()->movements()->create([
                    'type' => 'income',
                    'movement_id' => 2,
                    'from' => 'system',
                    'to' => Input::get('wallet'),
                    'amount' => Input::get('amount'),
                    'balance' => $wallet->balance + Input::get('amount'),
                    'note' => json_encode([
                        'admin' => auth()->user()->id,
                        'reason' => Input::get('reason')
                    ]),
                ]);

                $user->wallets()->increment(Input::get('wallet'), intval(Input::get('amount')));
                $user->wallets()->increment('balance', intval(Input::get('amount')));

                return redirect()->route('admin.members.index');
            } else {
                return redirect()->route('admin.members.addcredit' . $user->id)->withErrors($validator);
            }
        } else {
//                    dd($validator);
            return redirect()->route('admin.members.index')->withErrors($validator);
        }

    }
}
