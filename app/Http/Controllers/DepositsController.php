<?php
/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 20/12/2015
 * Time: 10:49 PM
 */

namespace DHI\Http\Controllers;

//use DHI\Http\Requests;
use Illuminate\Http\Request;
use DHI\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Input;
use DHI\UserDeposit;
use Hash;

class DepositsController extends Controller
{
    public function index()
    {
        //sacar la lista de de depositos que tiene este usuario
        $depositos = UserDeposit::where('user_id', Auth()->user()->getAuthIdentifier())->take(10)->get();
//        dd($depositos);
        return view('wallets.deposits',['depositos' => $depositos]);
    }

    public function cashOut()
    {
        echo 'peticion de sacar dinero';
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function deposits(Request $request)
    {
        $validator = Validator::make(Input::all(), [
            'image' => 'required|image|max:3000k',
            'amount'=> 'required|min:1',
            'inputLableautyRadio'=>'required'
        ]);

        if ($validator->passes()) {
//            $wallet = UserDeposit::where('user_id','=',Auth()->user()->getAuthIdentifier())->first();
            $cartera=Input::get('inputLableautyRadio');
            $cantidad= Input::get('amount');
            $fileName= '';
            if (Input::file('image')->isValid()) { // si se subio todo hago los preparativos para moverlo a public
                $destinationPath = 'uploads'; // carpeta a donde se va a mover
                $extension = Input::file('image')->getClientOriginalExtension(); // obtengo la extencion de la imagen para agregarsela al nuevo nombre
                $fileName = Hash::make(Input::file('image')->getClientOriginalName()).'.'.$extension;   //creo el nuevo nombre con hash del nombre anterior y le agrego la extencion
            }else {      //si la imagen se subio mal se regresa a la vista principal con error
                return redirect()->route('wallets.deposits')->withErrors($validator);
            }
            /*if(preg_match("/^[0-9]/", $cantidad) ){
                echo 'son iguales <br>'.$cantidad;
            }else{
                echo 'no son iguales<br>'.$cantidad;
            }*/

            if($wallet = UserDeposit::create(array(
                'user_id' => Auth()->user()->getAuthIdentifier(),
                'amount'=>$cantidad,
                'image'=>$fileName,
                'wallet'=>$cartera,
                'status'=>'pending'))
            ){      //si se guardo la informacion ahoa si muevo el archivo
                echo 'se guardo';
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                return redirect()->route('wallets.deposits')->with('success', 'registro-success');
            }else{
                echo 'no se guardo';
                return redirect()->route('wallets.deposits')->withErrors($validator);
            }
        }else{
//            echo 'ase falta archivo';
//            dd($validator);
            return redirect()->route('wallets.deposits')->withErrors($validator);
        }
    }

}