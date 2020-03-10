<!-- Tab-Control mit Rechnung-Hochladen und Rechnungen-Anzeigen -->
<?php $__env->startSection('content'); ?>
    <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">

        <!-- Hier werden die Statusmeldungen aus der Session ausgegeben -->
        <?php if(session('status')): ?>
            <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php echo e(session('status')); ?>

                <br>
            </div>
        <?php endif; ?>

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
                <?php echo $__env->make('includes.includes_supplier.upload_bill', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <!-- Rechnungen angezeigen-->
                <?php echo $__env->make('includes.includes_supplier.panel_bill', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php $__env->stopSection(); ?>
<!-- Ende des Tab-Control mit Rechnung-Hochladen und Rechnungen-Anzeigen -->

<!-- Pop-Ups für die Lieferanten -->
<?php $__env->startSection('popups'); ?>
    @parent
        <!-- Metadaten ansehen Popup -->
    <?php echo $__env->make('includes.view_metadata_popup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Benachrichtigung ansehen Popup -->
    <?php echo $__env->make('includes.includes_accounting.view_notification_popup_accounting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- Benachrichtigung senden -->
    <?php echo $__env->make('includes.includes_supplier.send_notification_popup_supplier', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php $__env->stopSection(); ?>
<!-- Ende der Pop-Ups für den Lieferanten -->


<!-- CSS-Datei für den Fileinput -->
<?php $__env->startSection('css'); ?>
    @parent
    <!-- Darstellung für den Fileupload-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/fileinput.css')); ?>">
<?php $__env->stopSection(); ?>
<!-- Ende der CSS-Datei für den Fileinput -->

<!-- JS-Dateien für den Fileinput -->
<?php $__env->startSection('js'); ?>
    @parent

    <script type="text/javascript" src="<?php echo e(URL::asset('js/dataTables.responsive.js')); ?>"></script>


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
    <script type="text/javascript" src="<?php echo e(URL::asset('js/fileinput.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/fileinput_locale_de.js')); ?>"></script>


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
   
<?php $__env->stopSection(); ?>
<!-- Ende der JS-Dateien für den Fileinput -->

    <!-- Titel der Webseite -->
<?php $__env->startSection('title', 'Lieferant'); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>