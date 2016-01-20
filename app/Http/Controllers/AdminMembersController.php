<?php
/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 17/01/2016
 * Time: 02:46 PM
 */

namespace DHI\Http\Controllers;


class AdminMembersController  extends Controller
{

    public function index()
    {
        return view('admin.members.index');
    }
}