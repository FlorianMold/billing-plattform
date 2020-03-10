<!-- Login für die Lieferanten und die Buchhaltung -->
<?php $__env->startSection('content'); ?>
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <img alt="ELK Firmenlogo" src="img/elk.jpg" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h2>
                    Willkommen beim elektronischen Rechnungsaustausch der Firma ELK Fertighaus GmbH!
                </h2>
            </div>
        </div>
        <br><br>
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="pull-right">
                    <a href="#panel_accounting_login" data-toggle="tab">Buchhaltung</a>
                </li>
                <li class="active pull-right">
                    <a href="#panel_supplier_login" data-toggle="tab">Lieferant</a>
                </li>
            </ul>

            <br>
            <?php if ($errors->any()): ?>
                <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <?php foreach ($errors->all() as $error): ?>
                        <?php echo e($error); ?>

                        <br>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (session('status')): ?>
                <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <?php echo e(session('status')); ?>

                    <br>
                </div>
            <?php endif; ?>

            <div id="success"></div>

            <div class="tab-content" style="border: 1px solid lightgray">

                <!-- Panel Lieferant -->
                <?php echo $__env->make('includes.includes_login.panel_supplier_login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

              <!-- Panel Buchhaltung -->
                <?php echo $__env->make('includes.includes_login.panel_accounting_login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



            </div>

        </div>
        <br>
    </div>
    <div class="col-md-3">
    </div>
    <div class="clearfix"></div>
<?php $__env->stopSection(); ?>
<!-- Ende des Login für die Lieferanten und die Buchhaltung -->


<!-- Hier wird der Header aus dem Template überschrieben, da ein anderer im Login verwendet wird -->
<?php $__env->startSection('header'); ?>
    <?php $__env->stopSection(true); ?>

<!-- Pop-Ups für das Login -->
<?php $__env->startSection('popups'); ?>
    <?php echo $__env->make('includes.includes_login.register_supplier_popup_login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('includes.includes_login.reset_password_popup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(true); ?>
<!-- Ende der Pop-Ups für das Login -->

<?php $__env->startSection('title', 'Login'); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>