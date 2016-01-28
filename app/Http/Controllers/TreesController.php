<?php

namespace DHI\Http\Controllers;

use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;

class TreesController extends Controller
{
    public function binary()
    {
        return view('trees.binary');
    }

    public function unilevel()
    {
        return view('trees.unilevel');
    }

    public function tree()
    {
        return view('trees.tree');
    }
}
