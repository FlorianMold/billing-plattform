<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //erstellt Lieferanten Tabelle
        Schema::create('suppliers', function (Blueprint $table) {
            $table->integer('id'); // ADR_NR des Lieferanten
            //$table->integer('ADR_NR');    --> ist jetzt die id
            //$table->integer('company_id')->nullable();       // gehört da standort von "company"??? --> mache es einmal so
            $table->string('ADR_NAME', 100)->nullable();
            //$table->string('LAND_CD', 32)->nullable();
            //$table->string('PLZ_CD', 32)->nullable();
            //$table->string('ADR_ADRESSE', 250)->nullable();
            //$table->string('ADR_ORT', 100)->nullable();
            $table->string('ADR_UID', 50)->nullable();
            $table->integer('user_id')->nullable(); //zugehörige User id
            $table->boolean('newRegistered')->nullable(); // setze ich auf "true" wenn sich ein Lieferant neu registriert und dann auf "false" wenn er das erste mal freigegeben wurde
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('suppliers');
    }
}
