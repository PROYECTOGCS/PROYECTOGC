<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCdpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cdp', function(Blueprint $table)
		{
			$table->increments('id');
			$table->biginteger('id_cdp')->unique();
			$table->biginteger('id_area');
			$table->date('fechaExp');
			$table->date('fechai');
			$table->date('fechaf');
			$table->string('descripcion', 500);
			$table->binary('comprobante')->nullable();
			$table->biginteger('presupuesto');
			$table->string('estado');
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
		Schema::drop('cdp');
	}

}
