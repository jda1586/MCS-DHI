<?php

namespace DHI\Http\Controllers;

use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;

class WalletsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd( auth()->user()->movements()
            ->where('from', 'activation')->orWhere('to', 'activation')->get());
        return view('wallets.index', [
            'wallets' => auth()->user()->wallets,
            'activation_movements' => auth()->user()->movements()
                ->where('from', 'activation')->orWhere('to', 'activation')->get(),
        ]);
    }
}
