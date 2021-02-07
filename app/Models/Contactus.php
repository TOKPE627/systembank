<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $table ="contactus";

    protected $fillable=[
       'user_id','name','email','message','response'
    ];


    public function  unread_messages(){
        return Contactus::where(['response' => null])->get();
    }

    public function  message($id){
        return Contactus::find($id);
    }

}
