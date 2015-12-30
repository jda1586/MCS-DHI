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
        $validator = Validator::make(Input::all(), [
//            'inputLableautyRadio' => 'required',

            'cantidad'=> 'required|min:1'
//            'password' => 'required|min:8|max:255',
        ]);

        if ($validator->passes()) {
            $wallet= UserWallet::where('user_id','=','123456')->get();
//            dd($wallet);
            $cartera=Input::get('inputLableautyRadio');   //[]
//            if($wallet[$cartera]>0){
            if($wallet['utilities']>0){
                echo 'si tiene fondos';
            }else{
                echo 'no tiene fondos';
            }
            return redirect()->route('cashout')->with('success', 'registro-success');
        }else{
            echo 'ase falta archivo';
//            dd($validator);
            return redirect()->route('cashout')->withErrors($validator);
        }
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