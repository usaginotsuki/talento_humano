<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('periodo', function(Blueprint $table)
		{
			$table->increments('PER_CODIGO');
			$table->string('PER_NOMBRE', 60);
			$table->tinyInteger('PER_ESTADO');
			$table->integer('PER_HORAS_ATENCION');
			$table->date('PER_FECHA_INICIO');
			$table->date('PER_FECHA_FIN');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('periodo');
	}

}
