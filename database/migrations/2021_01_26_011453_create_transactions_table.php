<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->text('receiver_bank_name');
            $table->text('receiver_name');

            $table->integer('sender_id')
            ->foreign('sender_id')->references('id')->on('senders')->onDelete('cascade');
        
            $table->text('swift_code');
            $table->text('sender_account_no');
            $table->text('receiver_account_no');
            $table->string('transfert_option');
            $table->double('transfert_amount');
            $table->text('transfert_description');
            $table->text('transfert_reference');
            $table->double('debit')->default(0.0);
            $table->double('credit')->default(0.0);
            $table->string('status')->default('FAIL');

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
        Schema::dropIfExists('transactions');
    }
}
