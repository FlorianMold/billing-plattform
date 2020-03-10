<?php

namespace Rechnungsplattform;

use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Supplier extends Eloquent
{
    //Attribute, die gleichzeitig befüllt werden können
    protected $fillable = array('id', 'adr_name', 'adr_uid', 'user_id', 'newRegistered');

    //Relation: Jeder Lieferant hat Rechnungen
    public function bill()
    {
        return $this->hasMany('Bill');
    }

    //Relation: Jeder Lieferant hat einen User
    public function user()
    {
        return $this->hasOne('User');
    }

    /*//Relation: Jeder Lieferant hat eine zugehörige Firmennummer
    public function company()
    {
        return $this->hasOne('Company');
    }*/
}
