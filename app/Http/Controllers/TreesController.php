<?php

namespace DHI\Http\Controllers;

use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;

class TreesController extends Controller
{
    public function binary()
    {
        return view('tree.binary');
    }

    public function unilevel()
    {
        return view('tree.unilevel');
    }
}
