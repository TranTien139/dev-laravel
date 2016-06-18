<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linkfacebook',256)->nullable;
            $table->string('linkgoogleplus',256)->nullable;
            $table->string('linktwitter',256)->nullable;
            $table->string('phone1',16)->nullable;
            $table->string('phone2',16)->nullable;
            $table->string('adress',256)->nullable;
             $table->string('email',64)->nullable();
            $table->text('linkgooglemap')->nullable;
            $table->longText('introduce')->nullable;
            $table->longText('logo')->nullable;
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('blocks');
    }
}
