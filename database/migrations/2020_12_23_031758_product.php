<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category');

            $table->string('name');
            $table->bigInteger('harga');
            $table->integer('stok');
            $table->integer('sold');
            $table->string('size')->nullable();
            $table->enum('rating', [1, 2, 3, 4, 5]);
            $table->integer('unique_click');
            $table->longText('image')->nullable();
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
        Schema::dropIfExists('product');
    }
}
