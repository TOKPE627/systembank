<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable=['name','description'];

    //A profile has many users
    public function users(){
        return $this->hasMany(\App\User::class);
    }
}
