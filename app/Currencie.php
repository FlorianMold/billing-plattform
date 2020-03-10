<?php

namespace Rechnungsplattform;

use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Currencie extends Eloquent
{
    //Attribute, die gleichzeitig befüllt werden können
    protected $fillable = array('currency_short', 'currency_name');

    //Relation: Jede Währung gehört zu einer Rechnung
    public function bill()
    {
        return $this->belongsTo('Bill');
    }
}
