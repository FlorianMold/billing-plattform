<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ELK Rechnungsplattform - @yield('title')</title>

    <meta name="description" content="ELK-Rechnungsplattform">
    <meta name="author" content="Florian Mold und Michael Vogler">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <!-- CSS-Section, damit man nachträglich in den Seiten etwas hinzufügen kann -->
    @section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/responsive.bootstrap.min.css') }}">
    @show

</head>
<body>

<div class="container-fluid">

    <!--Header-Section, damit dieser bei Nichtverwendung überschrieben werden kann -->
    @section('header')
    <div class="row"><br>
        <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <img src="img/elk.jpg" class="img-responsive" alt="Elk Firmenlogo"><br>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="dropdown" style="float:right;">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Angemeldet als <strong>
                            @if(isset($userinfo))
                                {{$userinfo->username}}
                                @endif
                        </strong>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="changePassword/@if(isset($userid)){{$userid}}@endif"><i class="fa fa-gear fa-fw"></i> Passwort ändern</a></li>
                        <li class="divider"></li>
                        <li><a href="logout" id="logout"><i class="fa fa-sign-out fa-fw"></i> Abmelden</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @show
    <!-- Ende des Headers -->


    <br>

        <!-- Hier wird der Content von der Blade-Template Engine eingefügt -->
        @yield('content')


    <!-- Footer -->
        <br>
        <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6 text-center" style="background-color: gray;">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <a style="color:white;" href="http://www.elk.at/">Startseite</a>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <a style="color:white;" href="http://www.elk.at/kontakt/">Kontakt</a>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <a style="color:white;" href="http://www.elk.at/impressum/">Impressum</a>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <a style="color:white;" href="http://www.elk.at/datenschutz/">Datenschutz</a>
        </div>
        <!-- Ende des Footers -->

</div>
    </div>

<!-- Hier werden die Popups von der Blade-Template Engine eingefügt -->
@section('popups')
        @show


<!-- JS-Section, damit man nachträglich in den Seiten etwas hinzufügen kann -->
@section('js')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/dataTables.bootstrap.min.js') }}"></script>


@show

</body>
</html>