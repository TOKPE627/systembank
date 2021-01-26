<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $fillable=['account_no','reference_no','description','debit','credit','status'];
}
