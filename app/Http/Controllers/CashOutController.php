<?php
/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 20/12/2015
 * Time: 10:49 PM
 */

namespace DHI\Http\Controllers;

use DHI\BitcoinAccount;
use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;
use DHI\UserCashout;
use Validator;
use Input;
use DateTime;
use DHI\UserWallet;


class CashOutController extends Controller
{
    public function index()
    {
        $salidas = UserCashout::where('user_id', Auth()->user()->getAuthIdentifier())->take(10)->get();
        $cuentas = BitcoinAccount::where('user_id',Auth()->user()->getAuthIdentifier())->get(['name','id']);
        /*if($cuentas==null | $cuentas->count()<=0){
            $cuentas[0]=['id'=>0,'name'=>'add bitcoin acount '];
            echo  'no hay cuenta';
        }*/
//        dd($cuentas);
        return view('wallets.cashout',['salidas'=> $salidas,'cuentas'=> $cuentas]);
//        return redirect()->route('finance::index');
    }

    public function cashOut()
    {
        echo 'peticion de sacar dinero';
        $validator = Validator::make(Input::all(), [
            'inputLableautyRadio' => 'required',
            'amount'=> 'required|min:1',
            'bitcoinacount' => 'required'
        ]);
        $cartera=Input::get('inputLableautyRadio');
        $cantidad= Input::get('amount');
        echo $cantidad;
//        dd($cartera);
        if($cartera=='utilities'| $cartera=='commission') {//VALIDO QUE SEA UNA CUENTA VALIDA Y NO OTRA
            if ($validator->passes()) {//SI LOS DATOS SON CORRECTOS
                $a = new DateTime("-30 days");
                $fecha = $a->setTime(0,0,0) ;
                $restriccion = UserCashout::where('created_at','>',$fecha)->get();     //saco una consulta con 30 dias atras
//                dd($restriccion);
                if($restriccion!=null&& $restriccion->count()>0){   //valido que no hayan pasado menos de 30 dias
                    dd('todavia no pasan los 30 dias de espera');
                    $validator->errors()->add('nfonfos','you have to wait 30 days after each withdrawal');
                    return redirect()->route('wallets.cashout')->withErrors($validator);
                }else{  //si esta vacio es que no ha echo un retiro
                    $wallet = UserWallet::where('user_id', '=', Auth()->user()->getAuthIdentifier())->first();
                    //            $wallet= UserWallet::where('user_id','=','Auth()->user()->getAuthIdentifier()')->get();
                    if ($wallet != null && $wallet[$cartera]>100) {  //valido que tenga fondos
//                        dd('si tiene fondos');
                        if($cantidad<$wallet[$cartera] && $cantidad>=100){//reviso que sea mayor a 100 y menor o igual a lo que tiene
//                            dd('si se puede pagar ');
                              /*$cantidadA=$cantidad*.03;
                            $cashout= UserCashout::create(array(
                                'user_id' => Auth()->user()->getAuthIdentifier(),
                                'amount'=>$cantidad,
                                'image'=>$fileName,
                                'wallet'=>$cartera,
                                'status'=>'pending'));
                            dd($cantidadA);*/
//                            $validator->errors()->add('registro', 'error');
                            $validator->errors()->add('nfondos',"don't have funds");
                            return redirect()->route('wallets.cashout')->withErrors($validator);
                        }else{
//                            dd('no se puede pagar');
                            $validator->errors()->add('nfondos',"don't have funds");
                            return redirect()->route('wallets.cashout')->withErrors($validator);
                        }

                    } else {    //si no tiene fondos lo regreso al menu
//                        dd('no hay nada');
                        $validator->errors()->add('nfondos',"don't have funds");
                        return redirect()->route('wallets.cashout')->withErrors($validator);
                    }
                }
            }else {
//                dd($validator);
                return redirect()->route('wallets.cashout')->withErrors($validator);
            }
        }else{//FIN DEL IF QUE VALIDA QUE SEA UNA CUENTA VALIDA
            return redirect()->route('wallets.cashout')->withErrors($validator);
        }
    }


}