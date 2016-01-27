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
use App\Helpers\Utiles;


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
        return view('admin.items.register');
    }

    public function store( Request $request ){


        $validator = Validator::make( $request->all(), $this->validations );
        $current_year  = date('Y');
        $current_month = date('m');
        $file_path     = $current_year . '/' . $current_month; // relative path to the file

        if ( !$validator->fails() ){

            Utiles::createDirs();
            $item = Item::create(  $request->except('images') );

            if ( $request->hasFile ( 'images' ) )  {
                    $file      = $request->file( 'images' );
                    $extension = $file->getClientOriginalExtension();
                    $filename  = $current_month.$current_year.str_random(25).'.'.$extension;

                    $file->move(FILES . '/' . $file_path, $filename);

                    $item->images                     = $file_path . '/' . $filename;
                    $item->original_filename         = $file->getClientOriginalName();
                }

                $item->save();

            return view('items.index');
        } else {
            return redirect()->route('admin.items.register')->withErrors($validator);
//            return view('items.register')->withErrors($validator);
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

     public function delete( $item_id )
    {
        $item = Item::find( $item_id );
        if ( $item ){
            $item->delete();
            $data = 'Item deleted';
        }else{
            $data = 'Item dont found';
        }

        return $data;
    }

    public function desactivateItem( $item_id )
   {
       $item = Item::find( $item_id );
       if ( $item ){
           $item->status = 'inactive';
           $item->save();
           $data           = 'Item desactivated';
       }else{
           $data           = 'Item dont found';
       }

       return $data;
   }

   public function activateItem( $item_id )
  {
      $item = Item::find( $item_id );
      if ( $item ){
          $item->status = 'active';
          $item->save();
          $data           = 'Item activated';
      }else{
          $data           = 'Item dont found';
      }

      return $data;
  }

  public function itemsList()
  {
      $items = Item::where( 'status', 'active' )->get( [ 'id', 'name' ] );

      if ( $items ){
          $data['items']     = $items->toArray();
          $data['message']   = 'OK';
      }else{
          $data['items']     = NULL;
          $data['message']   = 'Not items found';
      }

      return $data;

  }


}
