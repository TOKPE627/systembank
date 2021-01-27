<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use App\API\Constant;

use Illuminate\Http\Request;

class TACController extends Controller
{
    public $constant;
    public function __construct()
    {
        $this->constant = new Constant();
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $attributes = $request->all();
            $account = Account::where(['account_no'=>$attributes['sender_account_no']])->first();
            $transaction=Transaction::create(
                array_merge([
                    'sender_id'           =>  Auth::user()->id,
                    'transfert_reference' => mt_rand(1111111111, 9999999999),
                    'swift_code'          => mt_rand(1111111111, 9999999999)
                ],
                    $attributes
                ));
    
            if(Transaction::where(['id' => $transaction->id])->first()){
                $transaction->update([
                                    'status' => 'SUCCESS' 
                                    ]); 

                $account->update([
                    'balance' => $account->balance - $attributes['transfert_amount']
                ]);
                return redirect('/fund_transfert')->with('success', $this->constant::SUCCESS_STORE);
    
            }else{
                return redirect()->back()->with('success', $this->constant::ERROR_OCCURED_TX);   
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
