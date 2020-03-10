<?php $__env->startSection('title', 'Standort'); ?>

<?php $__env->startSection('wrapper_content'); ?>
    @parent
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header text-center">Standorte verwalten</h3>
        </div>
        <div class="col-md-12" id="info"></div>

        <div class="col-md-1"></div>
        <div id="tableCompany" class="col-md-10">
            <?php echo $__env->make('backend.includes.tableCompany', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masterBackend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>