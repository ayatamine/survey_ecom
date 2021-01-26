<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //$table->id();
            $table->increments('code');
            $table->unsignedBigInteger('productline_id');
            $table->string('name');
            $table->integer('scale');
            $table->string('vendor');
            $table->string('pdt_description');
            $table->integer('qty_in_stock');
            $table->double('buy_price',0,19);
            $table->string('msrp');
            $table->foreign('productline_id')->references('id')->on('product_lines');
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
        Schema::dropIfExists('products');
    }
}
