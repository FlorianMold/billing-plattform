<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rechnungsplattform - 403</title>

    <meta name="description" content="ELK-Rechnungsplattform">
    <meta name="author" content="Florian Mold und Michael Vogler">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/error.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/pygment_trac.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1 style="color: #000000;"><i class="fa fa-ban red"></i> 403 Zugriff verweigert</h1>
        <p class="lead">Sie haben keine Berechtigung diese Seite zu besuchen!</p>
        <p><a href="/" class="btn btn-default btn-lg green">Zurück zum Login</a></p>
    </div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/scale.fix.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</body>
</html>