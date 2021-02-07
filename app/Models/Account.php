<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable=['user_id','accounttype_id','account_no','balance','status'];

    public function user(){
        return $this->belongsTo(\App\User::class);
    }

    public function accounttype(){
        return $this->belongsTo(Accounttype::class);
    }

    public function accounts(){
        return Account::all();
    }

    
    public function account($account_no){
        return Account::where(['account_no' => $account_no])->first();
    }

    public function accountByUserId($user_id){
        return  Account::where(['user_id'=>$user_id])->first();
    }


}
