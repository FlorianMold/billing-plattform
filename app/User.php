<?php

namespace Rechnungsplattform;

use Illuminate\Support\Facades\Hash;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class User extends Eloquent
{
    //Attribute, die gleichzeitig befüllt werden können
    protected $fillable = [
        'username',
        'password',
        'email',
        'has_changed',
        'rights',
        'locked',
    ];

    //Relation: Jeder User gehört zu einem Lieferanten
    public function supplier()
    {
        return $this->belongsTo('Supplier');
    }

    //jedes mal aufgerufen wenn versucht wird passwort wert zu setzen
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
