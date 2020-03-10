<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //erstellt Users Tabelle
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); //User ID
            $table->string('username'); //Benutzername
            $table->string('password'); //Passwort
            $table->string('email'); //E-Mail Adresse
            $table->boolean('has_changed'); // "true" wenn er es schon geändert hat --> "false" muss es nach einloggen ändern
            $table->enum('rights', ['admin', 'supplier', 'accounter']); //Rechtearten
            $table->boolean('locked');  // "true" --> user gesperrt, darf NICHT einloggen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('users');
    }
}
