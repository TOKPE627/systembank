<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\API\Constant;
use App\Models\Operation;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
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
        
        $profile_admin_id      = (new Constant())::ADMIN_ID;
        $profile_employee_id   = (new Constant())::EMPLOYEE_ID;
        $profile_customer_id   = (new Constant())::CUSTOMER_ID;
        $no_result             = (new Constant())::NO_RESULT_FOUND;

        $operations= Operation::all();
        return view('dashboard.shared.operation.all',compact('profile_admin_id','profile_employee_id','profile_customer_id','operations','no_result'));
    }

    public function operation_proceed()
    {
        
        $profile_admin_id      = (new Constant())::ADMIN_ID;
        $profile_employee_id   = (new Constant())::EMPLOYEE_ID;
        $profile_customer_id   = (new Constant())::CUSTOMER_ID;

        return view('dashboard.shared.operation.proceed',compact('profile_admin_id','profile_employee_id','profile_customer_id'));
    }

    public function accountOperations($account_no){
        $profile_admin_id      = $this->constant::ADMIN_ID;
        $profile_employee_id   = $this->constant::EMPLOYEE_ID;
        $profile_customer_id   = $this->constant::CUSTOMER_ID;
        $no_result             = (new Constant())::NO_RESULT_FOUND;
        $operations = Operation::where(['account_no' => $account_no])->get();
        $account = Account::where(['user_id'=>Auth::user()->id])->first();

       return view('dashboard.shared.operation.accountoperations',compact('profile_admin_id','profile_employee_id','profile_customer_id','operations','account_no','no_result','account'));
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
        $attributes = $request->all();
    
        $account = Account::where(['account_no'=>$attributes['account_no']])->first();
        if(isset($account)){
           
            $operation=Operation::create($attributes);

            if(Operation::where(['id' => $operation->id])->first()){
                $operation->update([
                                    'status' => 'SUCCESS' 
                                    ]); 
                if($request->type=="deposit"){
                    $account->update([
                        'balance' => $account->balance + $attributes['amount']
                    ]);
                    return redirect()->back()->with('success', $this->constant::SUCCESS_STORE);
                }
                if($request->type=="withdraw"){
                    $account->update([
                        'balance' => $account->balance - $attributes['amount']
                    ]);
                    return redirect()->back()->with('success', $this->constant::SUCCESS_STORE);
                
                }
            }else{
                return redirect()->back()->with('success', $this->constant::ERROR_OCCURED_TX);   
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
}
