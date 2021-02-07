<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $fillable=[
                         'sender_id',
                         'sender_account_no',
                         'receiver_bank_name',
                         'receiver_name',
                         'receiver_account_no',
                         'swift_code',
                         'transfert_option',
                         'transfert_amount',
                         'transfert_description',
                         'transfert_reference',
                         'debit',
                         'credit',
                         'status'
                        ];

    public function transactions(){
        return Transaction::all();
    }


    public function account_transactions($account_no){
        return Transaction::where(['sender_account_no' => $account_no])->get();
       }
}
