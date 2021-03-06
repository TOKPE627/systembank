<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   
    protected $fillable=[
        'lastname',
        'firstname',
        'email',
        'profile_id',
        'password',
        'date_birth',
        'picture',
        'phone_no',
        'gender',
        'address',
        'city_name',
        'state',
        'zip_code',
        'account_type_id',
        'profession',
        //'account_no',
        'status',
        'code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function accounts(){
        return $this->hasMany(\App\Models\Account::class);
    }

    public function banktellers(){
        return User::where(['profile_id' => 2])->get();
    }

    public function customers(){
        return User::where(['profile_id' => 3])->get();
    }
}
