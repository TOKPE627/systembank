<?php

namespace App\Http\Controllers;

use App\API\Constant;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\User;
use App\Models\Account;
use App\Models\Operation;
use App\Models\Transaction;

use Illuminate\Http\Request;

class ContactUsController extends Controller
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

 

    public function store(Request $request)
    {

       ContactUs::create($request->all());
        
        $messagesuccess =  $this->constant::CONSTACTUS_MESSAGE;

        return view('welcome.contactus.messagesuccess',compact('messagesuccess'));
    }


    public function update(Request $request)
    {

       $contactus = Contactus::findOrFail($request['id']);

        $contactus->update($request->all());

        //(new SendmailController())->response_mail_to_visitor($contactus);

        return redirect()->back()->with('success',$this->constant::CONTACTUS_RESPONSE);
    }
    
    public function message($id){
                  
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
        $message               = $this->contactus->message($id);
    
        return view('welcome.contactus.response',compact('message','profile_admin_id','profile_employee_id',
            'profile_customer_id','customers','no_result','last_messages','banktellers','accounts',
            'operations','transactions'));   
    }
}
