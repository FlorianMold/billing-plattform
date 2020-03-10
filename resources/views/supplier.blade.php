@extends('layouts.master')

<!-- Tab-Control mit Rechnung-Hochladen und Rechnungen-Anzeigen -->
@section('content')
    <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">

        <!-- Hier werden die Statusmeldungen aus der Session ausgegeben -->
        @if (session('status'))
            <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ session('status') }}
                <br>
            </div>
        @endif

        <!-- Hier werden die Erfolgsmeldungen ausgegeben -->
        <div id="success"></div>

        <!-- Tabcontrol für die Lieferanten -->
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="pull-right">
                    <a href="#panel_uploadbill" data-toggle="tab">Hochladen </a>
                </li>
                <li class="active pull-right">
                    <a href="#panel_bill" data-toggle="tab">Rechnungen</a>
                </li>
            </ul>
            <br>
            <div class="tab-content ">

                <!-- Rechnung Hochladen -->
                @include('includes.includes_supplier.upload_bill')

                <!-- Rechnungen angezeigen-->
                @include('includes.includes_supplier.panel_bill')

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    @stop
<!-- Ende des Tab-Control mit Rechnung-Hochladen und Rechnungen-Anzeigen -->

<!-- Pop-Ups für die Lieferanten -->
@section('popups')
    @parent
        <!-- Metadaten ansehen Popup -->
    @include('includes.view_metadata_popup')
            <!-- Benachrichtigung ansehen Popup -->
    @include('includes.includes_accounting.view_notification_popup_accounting')

        <!-- Benachrichtigung senden -->
    @include('includes.includes_supplier.send_notification_popup_supplier')

    @stop
<!-- Ende der Pop-Ups für den Lieferanten -->


<!-- CSS-Datei für den Fileinput -->
@section('css')
    @parent
    <!-- Darstellung für den Fileupload-->
    <link rel="stylesheet" href="{{ URL::asset('css/fileinput.css') }}">
@stop
<!-- Ende der CSS-Datei für den Fileinput -->

<!-- JS-Dateien für den Fileinput -->
@section('js')
    @parent

    <script type="text/javascript" src="{{ URL::asset('js/dataTables.responsive.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('.dataTables').DataTable({
                responsive: true,
                "aoColumns": [{"bSortable": true, "searchable": true}, {"bSortable": true, "searchable": true}, {"bSortable": false, "searchable": false}, {"bSortable": false, "searchable": false}, {"bSortable": false, "searchable": false}],
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

    <!-- js für Fileupload -->
    <script type="text/javascript" src="{{ URL::asset('js/fileinput.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/fileinput_locale_de.js') }}"></script>


    <!-- Implementation des File-Inputs -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#bill_pdf").fileinput({
                language: 'de',
                uploadUrl: '#',
                allowedFileExtensions : ['pdf']
            });
        });
    </script>

<!-- Datatable Konfiguration -->
   
@stop
<!-- Ende der JS-Dateien für den Fileinput -->

    <!-- Titel der Webseite -->
@section('title', 'Lieferant')