<?php

namespace DHI\Http\Controllers;

use Auth;
use DHI\UserTree;
use Hash;
use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;
use DHI\Jobs\NewUserMailJob;
use Input;
use Validator;
use DHI\Item;


class ItemsController extends Controller
{
    private $validations;

    public function __construct( ) {
        $this->validations = [
            'name'        => 'required|string',
            'stock'       => 'required|numeric',
            'price'       => 'required|numeric',
            'features'    => 'required|regex:/^[\pL\s\d\-.\/]+$/u',
            'description' => 'required|regex:/^[\pL\s\d\-.\/]+$/u',
            'images'      => 'required',
            'status'      => 'required|in:active,disable',
        ];

    }

    public function index()
    {
//        $items = Item::get();
        /*if ( count( $items ) > 0 ){
            return $items;
        }else {
            return 'Not items found';
        }*/
//        dd($items);
        return view('admin.items.index',[
            'items' => Item::get()
        ]);
    }

    public function register()
    {
        return view('items.register');
    }

    public function store( Request $request ){

        $validator = Validator::make( $request->all(), $this->validations );
        if ( !$validator->fails() ){
            $item = Item::create( $request->all() );
            return view('items.index');
        } else {
            return $validator->messages();
        }
    }

    public function show( $id )
    {
        $item = Item::find( $id );
        if( $item ){
            $data = $item->toArray();
        }else{
            $data = 'Item not found';
        }

        return $data;

    }


}
