<?php

namespace DHI\Http\Controllers;

use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;
use Input;
use Validator;

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
        $validator = Validator::make(Input::all(), [
            'user' => 'required|alpha_num|min:6|max:18',
            'password' => 'required|min:8|max:255',
        ]);
        if ($validator->passes()) {
            if (auth()->attempt(['user' => Input::get('user'), 'password' => Input::get('password'), 'status' => 'active'], Input::get('remember'))) {
                return redirect()->route('home');
            } else {
                return redirect()->route('auth.index')->with('error', 'Usuario y/o contraseña incorrectos.');
            }
        } else {
            return redirect()->route('auth.index')->withErrors($validator);
        }
    }
}
