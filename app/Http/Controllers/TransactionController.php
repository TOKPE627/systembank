<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\API\Constant;
use App\Models\Transaction;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller
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


    public function checkAccountInfos(){
        echo $_GET['receiver_bank_name'];
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        $account = Account::where(['account_no'=>$attributes['sender_account_no']])->first();
       
        if(isset($account)){
                if($attributes['transfert_amount'] > $account->balance){
                    return redirect()->back()->with('success', $this->constant::INSUFFICIENT_AMOUNT);
                }else{
    
                    $profile_admin_id      = $this->constant::ADMIN_ID;
                    $profile_employee_id   = $this->constant::EMPLOYEE_ID;
                    $profile_customer_id   = $this->constant::CUSTOMER_ID;
    
                    $tac                   = mt_rand(1111111111, 9999999999);
                    $account = Account::where(['user_id'=>Auth::user()->id])->first();

                    return view('dashboard.shared.transaction.tac',compact('profile_admin_id','profile_employee_id','profile_customer_id','attributes','tac','account'));
                }
            }else{
                return redirect()->back()->with('success', $this->constant::ACCOUNT_NOT_FOUND);
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


    public function fund_transfert(){
        $profile_admin_id      = $this->constant::ADMIN_ID;
        $profile_employee_id   = $this->constant::EMPLOYEE_ID;
        $profile_customer_id   = $this->constant::CUSTOMER_ID;
        $account = Account::where(['user_id'=>Auth::user()->id])->first();

        return view('dashboard.shared.transaction.fundtransfert',compact('profile_admin_id','profile_employee_id','profile_customer_id','account'));
    }
    public function accountTransactions($account_no){
        $profile_admin_id      = $this->constant::ADMIN_ID;
        $profile_employee_id   = $this->constant::EMPLOYEE_ID;
        $profile_customer_id   = $this->constant::CUSTOMER_ID;
       $no_result             = (new Constant())::NO_RESULT_FOUND;
       $transactions = Transaction::where(['sender_account_no' => $account_no])->get();
       $account = Account::where(['user_id'=>Auth::user()->id])->first();

       return view('dashboard.shared.transaction.accounttransactions',compact('profile_admin_id','profile_employee_id','profile_customer_id','transactions','account_no','no_result','account'));
    }
}
