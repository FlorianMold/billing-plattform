<?php

namespace Rechnungsplattform;

use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Email extends Eloquent
{
    // Hier werden die beiden Email abgespeichert
    //      - von wo die Rechnung unserer Seite weggeschickt wird
    //      - die des Automatischen Systems
    //      - Email, wo der Administrator zugreifen kann, auf diese werden die ganzen NEUEN Registrierungen geschickt

    //Attribute, die gleichzeitig befüllt werden können
    protected $fillable = array('id', 'usageofthis', 'emailaddress'); //, 'password'
}
