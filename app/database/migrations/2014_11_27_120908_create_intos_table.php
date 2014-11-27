<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('intos', function(Blueprint $table)
		{
       $table->increments('idEntrada');
       $table->string('NomProducto');
       $table->string('cantidad');
       $table->integer('costo');
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
		Schema::drop('Intos');
	}

}
