<?php

namespace App\Http\Controllers;

use App\API\Constant;
use App\API\MailInfos;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Account;
use App\Models\Operation;
use App\Models\Transaction;

class SendmailController extends Controller
{
    public $mail_infos;
    public $constant;

    public function __construct()
    {
        $this->mail_infos = new MailInfos();
        $this->constant   = new Constant();
    }


    public function add_bankteller($bankteller_email){

        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);

        $data = array(
            'app_name'             => $this->constant::APP_NAME,
            'current_lastname'     => Auth::user()->lastname,
            'current_firstname'    => Auth::user()->firstname,
            'login_email'          => $bankteller_email,
            'login_password'       => mt_rand(1111111111, 9999999999),
        );

        $beautymail->send('mail.mainusers.bankteller', compact('data'), function($message) use ($bankteller_email)
        {
            $message
                ->from($this->mail_infos::SENDGRID_KNOWN_USER)
                ->to($bankteller_email)
                ->subject($this->mail_infos::SUBJECT_RESPONSE_VISITOR);

        });
    }

    /*public function resetpassword(User $user){

        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);

        $data = array(
            'lastname'          => $user->lastname,
            'firstname'         => $user->firstname,
            'resetpasswordcode' => $user->code
        );

        $beautymail->send('mail.user.resetpassword', compact('data'), function($message) use ($user)
        {
            $message
                ->from($this->mail_infos::SENDGRID_KNOWN_USER)
                ->to($user->email)
                ->subject($this->mail_infos::SUBJECT_RESET_PASSWORD);
        });
    }*/
}
