<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $fillable=[
                         'account_id',
                         'sender_id',
                         'sender_account_no',
                         'receiver_name',
                         'receiver_account_no',
                         'receiver_bank_name',
                         'swift_code',
                         'transfert_option',
                         'transfert_amount',
                         'transfert_description',
                         'transfert_reference',
                         'debit',
                         'credit',
                         'status'
                        ];
}
