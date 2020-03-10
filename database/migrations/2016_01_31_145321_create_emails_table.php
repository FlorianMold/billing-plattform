<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id'); //ID
            $table->enum('usageOfThis', ['admin', 'accounter', 'accountingSystem'])->nullable();  //Verwendung
            $table->string('emailaddress'); //E-Mail Adresse
            //$table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('emails');
    }
}
