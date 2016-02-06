<?php

namespace DHI\Http\Controllers;

use DHI\User;
use DHI\Item;
use DHI\Auction;
use DHI\UserAuction;
use Auth;
use Hash;
use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;
use DHI\Jobs\NewUserMailJob;
use Input;
use Validator;


class AuctionsController extends Controller
{

    public function __construct( ) {
        $this->validations = [
            'pool'        => 'required|integer',
            'price'       => 'required|numeric',
            'time'        => 'required|numeric',
            'time_start'  => 'required|date_format:d/m/Y\TH:i:s\Z',
            'time_end'    => 'required|date_format:d/m/Y\TH:i:s\Z|after:time_start',
            'bid'         => 'required|numeric',
            'status'      => 'in:active,disable',
            'user_id'     => 'required|integer',
            'item_id'     => 'required|integer',
        ];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auctions=[];
        return view('admin.auctions.index',['auctions'=>$auctions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view( 'auctions.register' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $validator  = Validator::make( $request->all(), $this->validations );
        $user_id    = $request->get( 'user_id' ) ;

        if ( !$validator->fails() ){

            $item = Item::find( $request->get('item_id') );

            if ( $item ){
                if ( $item->status == ACTIVE ){

                    $auction     = Auction::create(  $request->except('user_id'));
                    $userAuction = UserAuction::create([ 'user_id' => $user_id, 'auction_id' => $auction->id ]);

                    return view('auctions.index');

                }else{
                    $data['message'] = 'The item you select is not active';
                }
            }else{
                $data['message'] = 'Item not found';
            }

        } else {
            $data[ 'messages' ] = $validator->messages();
        }

        return $data;

    }

    public function register()
    {
        return view('admin.auctions.register');
    }
}
