<?php
/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 17/01/2016
 * Time: 02:46 PM
 */

namespace DHI\Http\Controllers;

use Validator;
use DHI\Product;
use DHI\User;
use Input;
use DateTime;

class AdminMembersController extends Controller
{

    public function index()
    {
        return view('admin.members.index', [
            'packegs' => Product::where('status', 'active')->orderBy('id', 'DESC')->get(),
            'total' => User::all()->count(),
            'users' => User::where('id', '>', 1)
                ->where(function ($q) {
                    if (Input::has('search')) {
                        $q->where('user', 'like', '%' . Input::get('search') . '%')
                            ->orWhere('name', 'like', '%' . Input::get('search') . '%');
                    }
                    if (Input::has('packeg')) {
                        $q->where('product_id', Input::get('packeg'));
                    }
                })
                ->paginate(50),
        ]);
    }


    public function addCredit()
    {
//        dd('se agrego credito');
        return view('admin.members.addcredit');
    }

    public function credit()
    {
        echo 'agregar credito';
        /*$validator = Validator::make(Input::all(), [
            'inputLableautyRadio' => 'required',
            'amount'=> 'required|min:1',
            'bitcoinacount' => 'required'
        ]);*/


    }
}