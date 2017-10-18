<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserved_room', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->unsigned();
                $table->foreign('room_id')->references('id')->on('room');
            $table->integer('reservation_id')->unsigned();
                $table->foreign('reservation_id')->references('id')->on('reservation');
            $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('user');
            $table->date('date_reservation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserved_room');
    }
}
