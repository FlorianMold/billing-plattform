<?php

namespace Rechnungsplattform;

use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Billtype extends Eloquent
{
    //Attribute, die gleichzeitig befüllt werden können
    protected $fillable = array('id', 'type_name', 'billtype_short');

    //Relation: Jede Rechnungsart hat eine Rechnung
    public function bill()
    {
        return $this->belongsTo('Bill');
    }
}
