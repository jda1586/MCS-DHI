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
use Validator;
use Input;
use DHI\UserWallet;

class CashOutController extends Controller
{
    public function index()
    {
        return view('deposits.cashout');
//        return redirect()->route('finance::index');
    }

    public function cashOut()
    {
        echo 'peticion de sacar dinero';
    }

    public function deposits()
    {
        echo 'se agrego dinero';
        $validator = Validator::make(Input::all(), [
//            'image' => 'required',
            'cantidad'=> 'required|min:1'
//            'password' => 'required|min:8|max:255',
        ]);

        if ($validator->passes()) {
//            echo 'se  cargo';
//            $datos=Input::all();
//            dd($datos);
//            dd($validator);

            $wallet = UserWallet::create(array(
                Input::get('inputLableautyRadio') => Input::get('cantidad')
            ));
            return redirect()->route('deposits')->with('success', 'registro-success');
        }else{
            echo 'ase falta archivo';
//            dd($validator);
            return redirect()->route('deposits')->withErrors($validator);
        }
    }

}