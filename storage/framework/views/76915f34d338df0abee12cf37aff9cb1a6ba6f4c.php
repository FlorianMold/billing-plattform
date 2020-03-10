<?php $__env->startSection('title', 'Rechnungstyp'); ?>

<?php $__env->startSection('wrapper_content'); ?>
    @parent
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header text-center">Rechnungstypen verwalten</h3>
            <div id='info' class="col-md-12"></div>
        </div>

        <div class="col-md-3"></div>
        <div id="listBilltype" class="col-md-6">
            <?php echo $__env->make('backend.includes.listBilltype', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masterBackend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>