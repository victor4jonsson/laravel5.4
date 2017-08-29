<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {


        schema::create('users', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',32);
            $table->string('email',32)->unique();
            $table->string('password',32);
            $table->rememberToken(100);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
