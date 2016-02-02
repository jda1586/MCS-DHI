<?php
/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 17/01/2016
 * Time: 02:46 PM
 */

namespace DHI\Http\Controllers;

use DHI\UserWallet;
use Illuminate\Http\Request;
use Validator;
use DHI\Product;
use DHI\User;
use Input;

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


    public function addCredit($User = 'default')
    {
        return view('admin.members.addcredit', ['user' => $User]);
    }

    public function credit(Request $request)
    {
        $validator = Validator::make(Input::all(), [
            'user' => 'required|exists:users,user',
            'wallet' => 'required|string',
            'amount' => 'required|min:1',
            'reason' => 'required',
        ]);

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
                    'note' => 'The admin: ' . auth()->user()->user . '(' . auth()->user()->id . '),
                    has made this movement with this reason: ' . Input::get('reason')
                ]);

                auth()->user()->wallets()->increment(Input::get('wallet'), Input::get('amount'));
                auth()->user()->wallets()->increment('balance', Input::get('amount'));

                return redirect()->route('admin.members.index');
            } else {
                return redirect()->route('admin.members.addcredit')->withErrors($validator);
            }
        } else {
            return redirect()->route('admin.members.addcredit')->withErrors($validator);
        }

    }
}
