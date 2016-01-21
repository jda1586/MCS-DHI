<?php
/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 17/01/2016
 * Time: 02:46 PM
 */

namespace DHI\Http\Controllers;


use DHI\Product;
use DHI\User;

class AdminMembersController extends Controller
{

    public function index()
    {
        return view('admin.members.index', [
            'packegs' => Product::where('status', 'active')->orderBy('id', 'DESC')->get(),
            'total' => User::all()->count(),
            'users' => User::where('id', '>', 1)->paginate(50),
        ]);
    }
}