<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->integer('profile_id')->nullable();
           // $table->foreign('profile_id')->references('id') ->on('profiles') -> onDelete('cascade');
            $table->string('password');
            //$table->string('confirm_password');
            $table->string('date_birth')->nullable();
            $table->string('picture')->varchar(255)->nullable();
            $table->string('phone_no')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('city_name')->varchar(255);
            $table->string('state')->varchar(255);
            $table->string('zip_code')->nullable();
            $table->string('profession')->nullable();
            //$table->text('account_no')->nullable();
            $table->string('code')->nullable();
            $table->string('status')->default('active');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
