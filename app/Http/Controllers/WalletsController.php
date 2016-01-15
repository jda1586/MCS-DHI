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
        return view('wallets.index', [
            'wallets' => auth()->user()->wallets,
            'commission_movements' => auth()->user()->movements()
                ->where('from', 'commission')->orWhere('to', 'commission')->take(20)->get(),
            'activation_movements' => auth()->user()->movements()
                ->where('from', 'activation')->orWhere('to', 'activation')->take(20)->get(),
            'utilities_movements' => auth()->user()->movements()
                ->where('from', 'utilities')->orWhere('to', 'utilities')->take(20)->get(),
            'auction_movements' => auth()->user()->movements()
                ->where('from', 'auction')->orWhere('to', 'auction')->take(20)->get(),
            'bitcoin_acounts' => auth()->user()->bitcoin_accounts,
        ]);
    }
}
