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

    public function registration(){

        $profile_admin_id      = (new Constant())::ADMIN_ID;
        $profile_employee_id   = (new Constant())::EMPLOYEE_ID;
        $profile_customer_id   = (new Constant())::CUSTOMER_ID;
        $accounttypes          = Accounttype::all();

        return view('auth.register',compact('profile_admin_id','profile_employee_id','profile_customer_id','accounttypes'));

    }
 
}
