<?php

namespace DHI\Http\Controllers;

use DHI\BitcoinAccount;
use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;
use Input;
use Validator;

class WalletsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wallets.index', [
            'wallets' => auth()->user()->wallets,
            'commission_movements' => auth()->user()->movements()
                ->where('from', 'commission')->orWhere('to', 'commission')->orderBy('created_at', 'DESC')->take(20)->get(),
            'activation_movements' => auth()->user()->movements()
                ->where('from', 'activation')->orWhere('to', 'activation')->orderBy('created_at', 'DESC')->take(20)->get(),
            'utilities_movements' => auth()->user()->movements()
                ->where('from', 'utilities')->orWhere('to', 'utilities')->orderBy('created_at', 'DESC')->take(20)->get(),
            'auction_movements' => auth()->user()->movements()
                ->where('from', 'auction')->orWhere('to', 'auction')->orderBy('created_at', 'DESC')->take(20)->get(),
            'bitcoin_accounts' => auth()->user()->bitcoin_accounts,
        ]);
    }

    public function store()
    {
        $validator = Validator::make(Input::all(), [
            'nameaccount' => 'required|min:6',
            'numberaccount'=> 'required|min:27|max:34',
        ]);

        if ($validator->passes()) {
//            $wallet = UserDeposit::where('user_id','=',Auth()->user()->getAuthIdentifier())->first();
            $nameAccount=Input::get('nameaccount');
            $numberAccount= Input::get('numberaccount');

            if($wallet = BitcoinAccount::create(array(
                'user_id' => Auth()->user()->getAuthIdentifier(),
                'name'=>$nameAccount,
                'number_account'=>$numberAccount,
                'status'=>'pending',
                'balance_in'=>0,
                'balance_out'=>0,
                ))
            ){      //si se guardo la informacion ahoa si muevo el archivo
                return redirect()->route('wallets.index');
            }else{
                return redirect()->route('wallets.index')->withErrors($validator);
            }
        }else{
            return redirect()->route('wallets.index')->withErrors($validator);
        }
    }
}
