<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('password_criterias', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('appliesTo', ['admin', 'accounting', 'supplier']);
            $table->boolean('large_lower_case'); // "true" muss drinnen sein
            $table->boolean('special_chars'); // "true" muss drinnen sein
            $table->boolean('number'); // "true" muss drinnen sein
            $table->integer('min_chars'); //Mindestanzahl an Zeichen
            $table->integer('interval'); //Änderungsintervall
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('password_criterias');
    }
}
