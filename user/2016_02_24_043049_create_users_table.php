<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
   public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',64)->unique();
            $table->string('password',64);
            $table->string('fullname',64);
            $table->string('birthday',16);
            $table->string('gender',16);
            $table->string('level',16);
            $table->longText('avatar')->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('users');
    }
}
