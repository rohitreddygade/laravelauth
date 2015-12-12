<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SinUp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function(Blueprint $tb )
      {
        $tb->increments('id');
        $tb->string('email')->unique( );
        $tb->string('username');
        $tb->string('password');
        $tb->string('code');
        $tb->boolean('active') ;
        $tb->timestamps();
        $tb->rememberToken();
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
