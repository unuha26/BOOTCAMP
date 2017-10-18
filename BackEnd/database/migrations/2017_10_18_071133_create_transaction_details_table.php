<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->timestamp('TransactionDate');
            $table->increments('id');
            $table->integer('Room_id')->unsigned();
                $table->foreign('Room_id')->references('id')->on('rooms');
            $table->integer('Customer_id')->unsigned();
                $table->foreign('Customer_id')->references('id')->on('customers');
            $table->integer('price');
            $table->date('CheckInDate');
            $table->date('CheckOutDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
