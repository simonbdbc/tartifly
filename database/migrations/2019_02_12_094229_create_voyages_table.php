<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('pays');
            $table->string('ville');
            $table->string('duree');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('cout');
            $table->string('photo');
            $table->string('description');
            $table->boolean('disponibilite');
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
        Schema::dropIfExists('voyages');
    }
}
