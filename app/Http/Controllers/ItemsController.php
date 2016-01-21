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
            'features'    => 'required|json',
            'description' => 'required|json',
            'images'      => 'required|json',
            'status'      => 'required|in:active,disable',
        ];

    }

    public function index()
    {
        $items = Item::where( 'status', 'active' )->get();
        if ( count( $items ) > 0 ){
            $data = $items->toArray();
        }else {
            $data = [];
        }
        return view('admin.items.index',[
            'items' => $data
        ]);
    }

    public function register()
    {
        return view('items.register');
    }

    public function store( Request $request ){
        $validator = Validator::make( $request->all(), $this->validations );
        if ( !$validator->fails() ){
            $item = Item::create(  $request->all() );
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

     public function FunctionName( Request $request )
    {
        $item_id = $request->input('item_id');

    }


}
