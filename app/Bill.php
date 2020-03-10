<?php

namespace Rechnungsplattform;

use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Bill extends Eloquent
{
    //Attribute, die gleichzeitig befüllt werden können
    protected $fillable = array('pdf_name', 'document_date', 'amount', 'tax_amount', 'external_billnumber', 'billtype_id', 'currency_id', 'company_id', 'supplier_id', 'status');

    //Relation: Jede Rechnung hat eine Währung
    public function currency()
    {
        return $this->hasOne('Currencie');
    }

    //Relation: Jede Rechnung hat eine Firma
    public function company()
    {
        return $this->hasOne('Company');
    }

    //Relation: Jede Rechnung gehört zu einem Lieferanten
    public function supplier()
    {
        return $this->belongsTo('Supplier');
    }

    //Relation: Jede Rechnung hat einen Typen
    public function billtype()
    {
        return $this->hasOne('Billtype');
    }
}
