<?php

namespace Rechnungsplattform;

use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Password_criteria extends Eloquent
{
    //Attribute, die gleichzeitig befüllt werden können
    protected $fillable = array('appliesTo', 'large_lower_case', 'special_chars', 'number', 'min_chars', 'interval');
}
