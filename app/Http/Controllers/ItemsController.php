<?php

namespace DHI\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;
use DHI\Jobs\NewUserMailJob;
use Input;
use Validator;
use DHI\Item;
use DHI\Helpers\Utiles;


class ItemsController extends Controller
{
    private $validations;

    public function __construct()
    {
        $this->validations = [
            'name' => 'required|string',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'sku' => 'required',
            'features' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:3000k',
//            'status'      => 'required|in:active,disable',
        ];

    }

    public function index()
    {
        $items = Item::where('status', 'active')->get();
        if (count($items) > 0) {
            $data = $items->toArray();
        } else {
            $data = [];
        }
        return view('admin.items.index', [
            'items' => $data
        ]);
    }

    public function register()
    {
        return view('admin.items.register');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), $this->validations);
        /*$current_year  = date('Y');
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
//            dd($validator);
            return redirect()->route('admin.items.register')->withErrors($validator);
        }*/
        if ($validator->passes()) {
            if (Input::file('image')->isValid()) { // si se subio todo hago los preparativos para moverlo a public
                $destinationPath = 'items'; // carpeta a donde se va a mover
                $extension = Input::file('image')->getClientOriginalExtension(); // obtengo la extencion de la imagen para agregarsela al nuevo nombre
                $fileName = Hash::make(Input::file('image')->getClientOriginalName()) . '.' . $extension;   //creo el nuevo nombre con hash del nombre anterior y le agrego la extencion
            } else {      //si la imagen se subio mal se regresa a la vista principal con error
                $validator->errors()->add('imagen', "FAIL TO UPLOAD IMAGE");
                return redirect()->route('wallets.deposits')->withErrors($validator);
            }
            $f = ['en' => Input::get('features')];
            $features = json_encode($f);
            $d = ['en' => Input::get('description')];
            $description = json_encode($d);
//            dd(Input::all());
            if ($item = Item::create(array(
                'name' => Input::get('name'),
                'stock' => Input::get('stock'),
                'price' => Input::get('price'),
                'sku' => Input::get('sku'),
                'owner_id' => Auth()->user()->getAuthIdentifier(),
                'features' => $features,
                'description' => $description,
                'images' => $fileName,
            ))
            ) {      //si se guardo la informacion ahoa si muevo el archivo
//                echo 'se guardo';
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                return redirect()->route('admin.items.index');
            } else {
                $validator->errors()->add('item', "FAIL TO UPLOAD item");
                return redirect()->route('admin.items.register')->withErrors($validator);
            }
        } else {
//            echo 'ase falta archivo';
//            dd($validator);
            return redirect()->route('admin.items.register')->withErrors($validator);
        }
    }

    public function show($id)
    {
        $item = Item::find($id);
        if ($item) {
            $data = $item->toArray();
        } else {
            return view('admin.items.show');
        }
        return $data;
    }

    public function delete($item_id)
    {
        $item = Item::find($item_id);
        if ($item) {
            $item->delete();
            $data = 'Item deleted';
        } else {
            $data = 'Item dont found';
        }

        return $data;
    }

    public function desactivateItem($item_id)
    {
        $item = Item::find($item_id);
        if ($item) {
            $item->status = 'inactive';
            $item->save();
            $data = 'Item desactivated';
        } else {
            $data = 'Item dont found';
        }

        return $data;
    }

    public function activateItem($item_id)
    {
        $item = Item::find($item_id);
        if ($item) {
            $item->status = 'active';
            $item->save();
            $data = 'Item activated';
        } else {
            $data = 'Item dont found';
        }

        return $data;
    }

    public function itemsList()
    {
        $items = Item::where('status', 'active')->get(['id', 'name']);

        if ($items) {
            $data['items'] = $items->toArray();
            $data['message'] = 'OK';
        } else {
            $data['items'] = NULL;
            $data['message'] = 'Not items found';
        }

        return $data;

    }


}
