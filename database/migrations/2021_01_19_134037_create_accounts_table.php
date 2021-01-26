<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')
                  ->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('accounttype_id')
                  ->foreign('accounttype_id')->references('id') ->on('accounttypes')->onDelete('cascade');
            $table->text('account_no');
            $table->double('balance')->default(0.0);
            $table->string('status')->default('active');
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
        Schema::dropIfExists('accounts');
    }
}
