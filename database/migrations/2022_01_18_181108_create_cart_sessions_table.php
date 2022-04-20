<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('order_status_id')->unsigned();
            $table->bigInteger('promocode_id')->unsigned();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('address');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_status_id')->references('id')->on('order_statuses');
            $table->foreign('promocode_id')->references('id')->on('promocodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_sessions');
    }
}
