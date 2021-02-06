<?php

namespace App\Http\Controllers;
use App\API\Constant;
use Illuminate\Http\Request;
use App\Models\Accounttype;
class WelcomeController extends Controller
{
    public $constant;

    public function __construct()
    {
        $this->constant = (new Constant());
    }

    public function about_us(){
        return view('welcome.aboutus');
    }


    public function privacy(){
        return view('welcome.privacy');
    }

    public function show_more_operation(){
        return view('welcome.show_more_operation');
    }
    
    public function showLogin(){
        return view('auth.login');
    }

    public function registration(){

        $profile_admin_id      = (new Constant())::ADMIN_ID;
        $profile_employee_id   = (new Constant())::EMPLOYEE_ID;
        $profile_customer_id   = (new Constant())::CUSTOMER_ID;
        $accounttypes          = Accounttype::all();

        return view('auth.register',compact('profile_admin_id','profile_employee_id','profile_customer_id','accounttypes'));

    }
 
}
