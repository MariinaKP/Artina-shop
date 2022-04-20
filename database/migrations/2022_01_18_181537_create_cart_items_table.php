<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cart_session_id')->unsigned();
            $table->bigInteger('product_item_id')->unsigned();
            $table->tinyInteger('quantity')->unsigned();
            $table->timestamps();
            $table->foreign('cart_session_id')->references('id')->on('cart_sessions');
            $table->foreign('product_item_id')->references('id')->on('product_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
}
