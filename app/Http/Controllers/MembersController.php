<?php

namespace DHI\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function register()
    {
        return view('members.register');
    }

    public function profile()
    {
        return view('members.profile', ['user' => Auth::User()]);
    }
}
