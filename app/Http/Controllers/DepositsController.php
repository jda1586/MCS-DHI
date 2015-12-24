<?php
/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 20/12/2015
 * Time: 10:49 PM
 */

namespace DHI\Http\Controllers;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;

class DepositsController extends Controller
{
    public function index()
    {
        return view('deposits.index');
//        return redirect()->route('finance::index');
    }

    public function cashOut()
    {
        echo 'peticion de sacar dinero';
    }

}