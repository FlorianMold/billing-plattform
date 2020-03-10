<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilltypesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('billtypes', function (Blueprint $table) {
            $table->increments('id'); //ID
            $table->string('type_name'); //Rechnungstypname
            $table->string('billtype_short'); // Rechnungstyp Abkürzung --> "G"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('billtypes');
    }
}
