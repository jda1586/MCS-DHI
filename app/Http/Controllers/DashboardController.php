<?php

namespace DHI\Http\Controllers;

use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

}
