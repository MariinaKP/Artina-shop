<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned();
            $table->string('title');
            $table->string('product_code');
            $table->text('description');
            $table->decimal('price');
            $table->decimal('discount_price')->nullable();
            $table->string('images')->nullable();
            $table->string('color')->nullable();
            $table->enum('size', ['XS', 'S', 'M', 'L', 'XL'])->nullable();
            $table->unsignedInteger('available_quantity');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_items');
    }
}
