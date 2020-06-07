<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsStatutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('apprenants_statut', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idapp')->unsigned();
			$table->integer('idstatut')->unsigned();
			$table->foreign('idapp')->references('idapp')->on('apprenants')
						->onDelete('restrict')
						->onUpdate('restrict');

			$table->foreign('idstatut')->references('idstatut')->on('statut')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('apprenants_statut', function(Blueprint $table) {
			$table->dropForeign('apprenants_statut_idapp_foreign');
			$table->dropForeign('apprenants_statut_idstatut_foreign');
		});

		Schema::dropIfExists()('apprenants_statut');
	}
}
