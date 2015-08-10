<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrato', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->String('Codigo_Contrato')->unique();
			$table->biginteger('N_Aprovacion')->unique();
			$table->date('Fecha_Auto');
			$table->binary('Comprobacion')->nullable();
			$table->date('Fecha_Expedicion');
			$table->date('Fecha_Inicio');
			$table->date('Fecha_Final');
			$table->string('Descripcion_Contrato', 500);
			$table->biginteger('Dias_Trabajados');
			$table->biginteger('Meses_Trbajados');
			$table->biginteger('Valor_Mes');
			$table->binary('Archivo')->nullable();
			$table->biginteger('ID_modo')->unique();
			$table->biginteger('ID_Cargo')->unique();
			$table->biginteger('ID_CDP')->unique();
			$table->string('Estado');
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
		Schema::drop('contrato');
	}

}
