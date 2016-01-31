<?php
/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 17/01/2016
 * Time: 02:46 PM
 */

namespace DHI\Http\Controllers;

use DHI\UserWallet;
use Illuminate\Http\Request;
use Validator;
use DHI\Product;
use DHI\User;
use Input;

class AdminMembersController extends Controller
{

    public function index()
    {
        return view('admin.members.index', [
            'appends' => [
                'packeg' => Input::has('packeg') ? Input::get('packeg') : null,
                'search' => Input::has('search') ? Input::get('search') : null,
            ],
            'packegs' => Product::where('status', 'active')->orderBy('id', 'DESC')->get(),
            'total' => User::all()->count(),
            'users' => User::where('id', '>', 1)
                ->where(function ($q) {
                    if (Input::has('search')) {
                        $q->where('user', 'like', '%' . Input::get('search') . '%')
                            ->orWhere('name', 'like', '%' . Input::get('search') . '%')
                            ->orWhere('lastname', 'like', '%' . Input::get('search') . '%')
                            ->orWhere('email', 'like', '%' . Input::get('search') . '%');
                    }
                    if (Input::has('search') && is_numeric(Input::get('search'))) {
                        $q->orWhere('id', Input::get('search'));
                    }
                    if (Input::has('packeg')) {
                        $q->orWhere('product_id', Input::get('packeg'));
                    }
                })
                ->orderBy('id', 'DESC')->paginate(50),
        ]);
    }


    public function addCredit($User= 'default')
    {
//        dd('se agrego credito');
        return view('admin.members.addcredit',['user'=>$User]);
    }

    public function credit(Request $request)
    {
        echo 'agregar credito';
        $validator = Validator::make(Input::all(), [
            'user' => 'required',
            'wallet' => 'required',
            'amount'=> 'required | min:1'
        ]);

//        dd($validator);
        if ($validator->passes()) {
            echo 'si pasa';
//            $wallet = UserDeposit::where('user_id','=',Auth()->user()->getAuthIdentifier())->first();
            $usuario=Input::get('user');
            $cartera=Input::get('wallet');
            $cantidad= Input::get('amount');


            $user=User::where('user',$usuario)->first();
//            dd($user);
            if($user!=null){
                echo '<br>si existe<br>';
                $wallet = UserWallet::where('user_id', '=',$user->id)->first();
                $wallet->$cartera=$wallet->$cartera+$cantidad;
                $wallet->balance=$wallet->balance+$cantidad;
                $wallet->save();
                return redirect()->route('admin.members.index');
            }else{
                $validator->errors()->add('user',"the user does not exist ");
                return redirect()->route('admin.members.addcredit')->withErrors($validator);
            }
        }else{
//            echo 'ase falta archivo';
//            dd($validator);
            return redirect()->route('admin.members.addcredit')->withErrors($validator);
        }

    }
}
