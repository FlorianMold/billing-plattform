<!-- Tabelle mit den Rechnungen -->
<?php $__env->startSection('content'); ?>


    <?php echo $__env->make('includes.includes_accounting.table_accounting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<?php $__env->stopSection(); ?>
<!-- Ende der Tabelle mit den Rechnungen -->


<!-- Pop-Ups für die Buchhaltung -->
<?php $__env->startSection('popups'); ?>
    @parent
<?php echo $__env->make('includes.view_metadata_popup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('includes.includes_accounting.view_notification_popup_accounting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<!-- Ende der Pop-Ups für die Buchhaltung -->

<?php $__env->startSection('title', 'Buchhaltung'); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>