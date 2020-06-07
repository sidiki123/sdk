<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->increments('idapp');
            $table->char('nom');
            $table->char('prenom');
            $table->dateTime('date_de_naissance');
            $table->char('sexe');
            $table->char('formation');
            $table->char('etablissement');
            $table->integer('telephone');
            $table->char('promotion');
            $table->char('entreprise_actuelle');
            $table->char('fonction');
            $table->char('nationalite');
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
        Schema::dropIfExists('apprenants');
    }
}
