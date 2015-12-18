<?php

namespace DHI\Http\Controllers;

use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Muestra el formulario de login
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.index');
    }

    /**
     * Recive mediante post los datos de ingreso
     */
    public function login()
    {

    }
}
