<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\API\Constant;
use App\User;
use App\Models\Account;
use App\Models\Contactus;
use App\Models\Operation;
use App\Models\Transaction;
class EmployeeController extends Controller
{
    public $constant;
    public $contactus;
    public $user; 
    public $account; 
    public $operation; 
    public $transaction;

    public function __construct()
    {
        $this->constant = new Constant();
        $this->contactus   = new Contactus();
        $this->user        = new User();
        $this->account     = new Account();
        $this->operation   = new Operation();
        $this->transaction = new Transaction();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile_admin_id      = $this->constant::ADMIN_ID;
        $profile_employee_id   = $this->constant::EMPLOYEE_ID;
        $profile_customer_id   = $this->constant::CUSTOMER_ID;
        $no_result             = $this->constant::NO_RESULT_FOUND;  
        $last_messages         = $this->contactus->unread_messages();
        $customers             = $this->user->customers();
        $banktellers           = $this->user->banktellers();
        $accounts              = $this->account->accounts();
        $operations            = $this->operation->operations();
        $transactions          = $this->transaction->transactions();

        return view('dashboard.shared.employee.all',compact('profile_admin_id','profile_employee_id',
        'profile_customer_id','customers','no_result','last_messages','banktellers','accounts',
        'operations','transactions'));
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
       (new SendmailController())->add_bankteller($request['email']);
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
