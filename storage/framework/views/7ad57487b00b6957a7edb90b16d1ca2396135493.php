<!-- Tabelle mit den Rechnungen -->
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.includes_accounting.table_accounting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<!-- Ende der Tabelle mit den Rechnungen -->


<!-- Pop-Ups für die Buchhaltung -->
<?php $__env->startSection('popups'); ?>
    @parent
    <?php echo $__env->make('includes.view_metadata_popup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('includes.includes_accounting.view_notification_popup_accounting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<!-- Ende der Pop-Ups für die Buchhaltung -->

    <!-- Datatable Konfiguration-->
<?php $__env->startSection('js'); ?>
    @parent

    <script type="text/javascript" src="<?php echo e(URL::asset('js/dataTables.responsive.js')); ?>"></script>

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
<?php $__env->stopSection(); ?>

<!-- Titel der Webseite überschrieben-->
<?php $__env->startSection('title', 'Buchhaltung'); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>