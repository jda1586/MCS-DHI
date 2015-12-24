<?php

namespace DHI\Http\Controllers;

use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function profile()
    {
        return view('user.profile');
    }
}
