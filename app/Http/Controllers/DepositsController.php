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

    public function deposits()
    {
//        echo 'se agrego dinero <br>';
        $validator = Validator::make(Input::all(), [
            'image' => 'required',
            'cantidad'=> 'required|min:1'
//            'password' => 'required|min:8|max:255',
        ]);

        if ($validator->passes()) {
//            $cantidad =  Input::get('cantidad');
            /*if(preg_match("/^[0-9]/", $cantidad) ){
                echo 'son iguales <br>'.$cantidad;
            }else{
                echo 'no son iguales<br>'.$cantidad;
            }*/
//            echo 'se  cargo';
//            dd($validator);
            $cartera=Input::get('inputLableautyRadio');
            switch($cartera){
                case 'activation':
                    $wallet = UserWallet::create(array(
                        'user_id' => '123456', 'commission'=>'0.00','auction'=>'00.00','utilities'=>'00.00','balance'=>'00.00',
                        'responsible_id'=>'654321',
                        Input::get('inputLableautyRadio') => Input::get('cantidad')
                    ));
                    break;
                case 'commissions':
                    $wallet = UserWallet::create(array(
                        'user_id' => '123456', 'activation'=>'0.00','auction'=>'00.00','utilities'=>'00.00','balance'=>'00.00',
                        'responsible_id'=>'654321',
                        Input::get('inputLableautyRadio') => Input::get('cantidad')
                    ));
                    break;
                case 'auction':
                    $wallet = UserWallet::create(array(
                        'user_id' => '123456', 'commission'=>'0.00','activation'=>'0.00','utilities'=>'0.00','balance'=>'0.00',
                        'responsible_id'=>'654321',
                        Input::get('inputLableautyRadio') => Input::get('cantidad')
                    ));
                    break;
            }

            return redirect()->route('deposits')->with('success', 'registro-success');
        }else{
            echo 'ase falta archivo';
//            dd($validator);
            return redirect()->route('deposits')->withErrors($validator);
        }
    }

}