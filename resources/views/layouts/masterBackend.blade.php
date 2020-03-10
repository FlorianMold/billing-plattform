<!DOCTYPE html>
<html lang="gm">
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
            <link rel="stylesheet" href="{{ URL::asset('css/metisMenu.min.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('css/sb-admin-2.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('css/adminBackend.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('css/responsive.bootstrap.min.css') }}">
        @show
    </head>

    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/backend">ELK Fertighaus GmbH! - Administratoransicht</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right hidden-xs">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> {{ $user->username }} <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="/changePassword/{{ $userid }}"><i class="fa fa-gear fa-fw"></i> Passwort ändern</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Abmelden</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav side-menu">
                            <li>
                                <a href="/backend/supplier" style="color:black;"><i class="fa fa-check-square fa-fw"></i> Lieferanten verwalten</a>
                            </li>
                            <li>
                                <a href="/backend/accounter" style="color:black;"><i class="fa fa-user fa-fw"></i> Buchhalter verwalten</a>
                            </li>
                            <li>
                                <a href="/backend/passwordcriteria" style="color:black;"><i class="fa fa-th-list fa-fw"></i> Passwortkriterien</a>
                            </li>
                            <li>
                                <a href="/backend/location" style="color:black;"><i class="fa fa-map-marker fa-fw"></i> Standorte</a>
                            </li>
                            <li>
                                <a href="/backend/currency" style="color:black;"><i class="fa fa-eur fa-fw"></i> Währungen</a>
                            </li>
                            <li>
                                <a href="/backend/billtype" style="color:black;"><i class="fa fa-money fa-fw"></i> Rechnungsarten</a>
                            </li>
                            <li>
                                <a href="/backend/email" style="color:black;"><i class="fa fa-envelope-o fa-fw"></i> E-Mail</a>
                            </li>
                            <li class="hidden-md hidden-lg hidden-sm">
                                <a href="#"><i class="fa fa-user fa-fw"></i> {{$user->username}}<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/changePassword/{{$userid}}"><i class="fa fa-gear fa-fw"></i> Passwort ändern</a>
                                    </li>
                                    <li>
                                        <a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Abmelden</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper" style="padding-top: 20px; padding-bottom: 20px;">
                @section('wrapper_content')
                    <img src="../img/elk.jpg" alt="ELK Fertighaus GmbH" class="img-responsive img-thumbnail" style="width:500px; height:150px; display: block; margin-left: auto; margin-right: auto;">
                @show
            </div>

            <footer class="footer" style="background-color: gray;">
                <div class="container text-center">
                    <div class="col-md-3 text-muted">
                        <a href="http://www.elk.at/">Startseite</a>
                    </div>
                    <div class="col-md-3 text-muted">
                        <a href="http://www.elk.at/kontakt/">Kontakt</a>
                    </div>
                    <div class="col-md-3 text-muted">
                        <a href="http://www.elk.at/impressum/">Impressum</a>
                    </div>
                    <div class="col-md-3 text-muted">
                        <a href="http://www.elk.at/datenschutz/">Datenschutz</a>
                    </div>
                </div>
            </footer>
        </div>


        <!-- JS-Section, damit man nachträglich in den Seiten etwas hinzufügen kann -->
        @section('js')
            <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/sb-admin-2.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/metisMenu.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/scripts_backend.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/dataTables.bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/dataTables.responsive.js') }}"></script>

            <script>
                $(document).ready(function() {
                    $('.dataTables').DataTable({
                        "aoColumns": [{"bSortable": true, "searchable": true}, {"bSortable": true, "searchable": true}, {"bSortable": false, "searchable": true}],
                        responsive: true,
                        "language": {
                            "search": "Suche:",
                            "lengthMenu": "_MENU_ Einträge pro Seite anzeigen",
                            "zeroRecords": "Es gibt keine Einträge!",
                            "info": "Seite _PAGE_ von _PAGES_",
                            "infoEmpty": "Keine Einträge verfügbar!",
                            "infoFiltered": "(von _MAX_ Einträgen gefiltert)",
                            "oPaginate": {
                                sFirst: "Erste",
                                sLast: "Letzte",
                                sNext: "Nächste",
                                sPrevious: "Vorherige"
                            }
                        }
                    });
                });
            </script>

            @show
    </body>
</html>
