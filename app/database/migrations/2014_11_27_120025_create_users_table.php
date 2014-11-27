<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Schema::create('users', function(Blueprint $table)
		Schema::create('users', function(Blueprint $table)
		{
       $table->increments('iduser');
       $table->string('name');
       $table->string('apeP');
       $table->string('apeM');
       $table->integer('telefono');
       $table->string('email');
       $table->string('password');
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
		//
		Schema::drop('users');
	}

}
