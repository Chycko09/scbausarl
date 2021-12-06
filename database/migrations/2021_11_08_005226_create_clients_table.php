<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom');
            $table->string('njeune');
            $table->string('datenais');
            $table->string('lieunais');
            $table->string('paysresid');
            $table->string('profession');
            $table->string('situationmat');
            $table->string('tel');
            $table->string('portable');
            $table->string('email');
            $table->string('adresse');
            $table->string('quartier');
            $table->string('localite');
            $table->string('bp');
            $table->string('pi');
            $table->string('num');
            $table->string('lieudelivre');
            $table->string('par');
            $table->string('datedelivre');
            $table->string('dateexpire');
            $table->string('photos');
            $table->string('nomp');
            $table->string('prenomp');
            $table->string('lieuresip');
            $table->string('telp');
            $table->string('filiation');
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
        Schema::dropIfExists('clients');
    }
}
