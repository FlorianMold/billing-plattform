<!-- Header für die Passwort zurücksetzen Seite-->
<div class="row">
    <br>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-4 col-xs-8 col-sm-8 col-md-6 col-lg-4">
            <img src="../img/elk.jpg" class="img-responsive" alt="Elk Firmenlogo">
        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-- Hier wird die Passwort zurücksetzen Form eingebunden-->
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.includes_passwordreset.passwordreset_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<!-- Titel der Webseite überschrieben -->
<?php $__env->startSection('title', 'Passwort zurücksetzen'); ?>

<!-- Header wird überschrieben-->
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>