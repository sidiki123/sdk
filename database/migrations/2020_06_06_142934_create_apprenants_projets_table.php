<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsprojetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('apprenants_projets', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idapp')->unsigned();
			$table->integer('idpro')->unsigned();
			$table->foreign('idapp')->references('idapp')->on('apprenants')
						->onDelete('restrict')
						->onUpdate('restrict');

			$table->foreign('idpro')->references('idpro')->on('projets')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('apprenants_projets', function(Blueprint $table) {
			$table->dropForeign('apprenants_projets_idapp_foreign');
			$table->dropForeign('apprenants_projets_idpro_foreign');
		});

		Schema::dropIfExists()('apprenants_projets');
	}
}
