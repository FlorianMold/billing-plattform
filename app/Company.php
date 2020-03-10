<?php

namespace Rechnungsplattform;

use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Company extends Eloquent
{
    //Attribute, die gleichzeitig befüllt werden können
    protected $fillable = array('company_short', 'company_name');

    //Relation: Jede Firma gehört zu einer Rechnugn
    public function bill()
    {
        return $this->belongsTo('Bill');
    }

    //Relation: Jede Firma hat einen Lieferanten
    public function supplier()
    {
        return $this->belongsTo('Supplier');
    }
}
