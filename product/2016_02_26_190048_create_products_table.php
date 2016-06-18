<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->longText('description')->nullable();
            $table->integer('price')->unsigned();
            $table->integer('price_saleoff')->nullable()->unsigned();
            $table->longText('content')->nullable();
            $table->longText('useful')->nullable();
            $table->string('image');
            $table->string('image_detail')->nullable();
            $table->string('category_id')->nullable();
            $table->string('ishot',8)->nullable();
            $table->string('isnew',8)->nullable();
            $table->string('isbestseller',8)->nullable();
            $table->string('published',8)->nullable();
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
        Schema::drop('products');
    }
}
