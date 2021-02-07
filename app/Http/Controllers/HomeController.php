<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\API\Constant;
use App\Models\Account;
use App\Models\Contactus;
use App\Models\Operation;
use App\Models\Transaction;

class HomeController extends Controller
{

    public $constant;
    public $contactus;
    public $user; 
    public $account; 
    public $operation; 
    public $transaction;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->constant    = new Constant();
        $this->contactus   = new Contactus();
        $this->user        = new User();
        $this->account     = new Account();
        $this->operation   = new Operation();
        $this->transaction = new Transaction();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
        $profile_admin_id      = $this->constant::ADMIN_ID;
        $profile_employee_id   = $this->constant::EMPLOYEE_ID;
        $profile_customer_id   = $this->constant::CUSTOMER_ID;
        $last_messages     = $this->contactus->unread_messages();
        $customers         = $this->user->customers();
        $banktellers       = $this->user->banktellers();
        $accounts          = $this->account->accounts();
        $operations        = $this->operation->operations();
        $transactions      = $this->transaction->transactions();

        if(Auth::user()->profile_id==$profile_admin_id) { //ADMIN
   

            return view('dashboard.admin.home',compact('profile_admin_id','profile_employee_id',
            'profile_customer_id','last_messages','customers','banktellers','accounts','operations','transactions'));
        }

        if(Auth::user()->profile_id==$profile_employee_id) { //EMPLOYEE
            
            return view('dashboard.employee.home',compact('profile_admin_id','profile_employee_id',
            'profile_customer_id','last_messages','customers','banktellers','accounts','operations','transactions'));
        }
        
        if(Auth::user()->profile_id==$profile_customer_id) { //CUSTOMER
            $account = $this->account->accountByUserId(Auth::user()->id);
            $account_operations    = $this->operation->account_operations($account->account_no);
            $account_transactions  = $this->transaction->account_transactions($account->account_no);
            return view('dashboard.customer.home',
            compact('profile_admin_id','profile_employee_id', 'profile_customer_id',
            'account_operations','account_transactions','account'));
        }
    }


  
}
