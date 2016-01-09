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
                'status' => 'pending'
            ])
            ) {

            }
        } else {
            return redirect()->route('members.register')->withErrors($validator);
        }
    }

    public function profile()
    {
        return view('members.profile', ['user' => Auth::User()]);
    }

    public function email()
    {
        return view('emails.welcome');
    }

    public function commissions()
    {
        return view('members.commissions');
    }

    public function organization()
    {
        return view('members.organization');
    }
}
