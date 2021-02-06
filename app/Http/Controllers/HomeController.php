<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\API\Constant;
use App\Models\Account;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->constant = new Constant();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
        $profile_admin_id      = (new Constant())::ADMIN_ID;
        $profile_employee_id   = (new Constant())::EMPLOYEE_ID;
        $profile_customer_id   = (new Constant())::CUSTOMER_ID;

        if(Auth::user()->profile_id==$profile_admin_id) { //ADMIN
          
            return view('dashboard.admin.home',compact('profile_admin_id','profile_employee_id','profile_customer_id'));
        }

        if(Auth::user()->profile_id==$profile_employee_id) { //ADMIN
            
            return view('dashboard.employee.home',compact('profile_admin_id','profile_employee_id','profile_customer_id'));
        }
        
        if(Auth::user()->profile_id==$profile_customer_id) { //ADMIN
            $account = Account::where(['user_id'=>Auth::user()->id])->first();
            return view('dashboard.customer.home',compact('profile_admin_id','profile_employee_id','profile_customer_id','account'));
        }
    }


  
}
