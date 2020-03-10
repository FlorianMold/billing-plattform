@extends('layouts.master')

<!-- Tabelle mit den Rechnungen -->
@section('content')
    @include('includes.includes_accounting.table_accounting')
@stop
<!-- Ende der Tabelle mit den Rechnungen -->


<!-- Pop-Ups für die Buchhaltung -->
@section('popups')
    @parent
    @include('includes.view_metadata_popup')
    @include('includes.includes_accounting.view_notification_popup_accounting')
@stop
<!-- Ende der Pop-Ups für die Buchhaltung -->

    <!-- Datatable Konfiguration-->
@section('js')
    @parent

    <script type="text/javascript" src="{{ URL::asset('js/dataTables.responsive.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.dataTables').DataTable({
                responsive: true,
                "aoColumns": [{"bSortable": true, "searchable": true}, {"bSortable": true, "searchable": true}, {"bSortable": false, "searchable": false}, {"bSortable": false, "searchable": false}, {"bSortable": false, "searchable": false}, {"bSortable": false, "searchable": false}, {"bSortable": false, "searchable": false}],
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
@stop

<!-- Titel der Webseite überschrieben-->
@section('title', 'Buchhaltung')
