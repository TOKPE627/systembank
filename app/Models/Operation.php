<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{   
    protected $fillable=['account_no','type','account_no','amount','status'];

    public function operations(){
        return Operation::all();
    }

    public function account_operations($account_no){
     return Operation::where(['account_no' => $account_no])->get();
    }

}
