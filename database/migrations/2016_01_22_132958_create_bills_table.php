<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //erstellt Rechnungstabelle
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');  // die Rechnungsnummer der Firma ELK
            $table->string('pdf_name')->nullable(); //Name der PDF Datei
            $table->date('document_date')->nullable(); // Datum der Rechnungsausstellung
            $table->double('amount', 20, 2)->nullable(); //Rechnungsbetrag mit 2 Nachkommastellen
            $table->double('tax_amount', 20, 2)->nullable(); //Steuerbetrag mit 2 Nachkommastellen
            $table->string('external_billnumber'); //Externe Rechnungsnummer
            $table->integer('billtype_id'); //Rechnungsart
            $table->integer('currency_id'); //Währungsart
            $table->integer('company_id'); //Firmennummer
            $table->integer('supplier_id'); //Lieferantennummer
            $table->string('mail_title')->nullable(); //Benachrichtigungstitel
            $table->text('mail_desc')->nullable(); //Benachrichtigungsbeschreibung
            $table->enum('status', ['ready', 'taken', 'deleted']); //Status enum
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('bills');
    }
}
