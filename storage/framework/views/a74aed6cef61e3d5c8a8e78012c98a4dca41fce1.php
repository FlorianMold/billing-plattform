<?php $__env->startSection("title", "Buchhalter"); ?>

<?php $__env->startSection("wrapper_content"); ?>
    @parent
    <div class="row">
        <!-- zum Ausgäben der Informationen -->
        <div id="info">
            <br>
            <div id="infoText"></div>
        </div>
        <?php if(session('success')): ?>
            <div class="col-md-12 successAlert">
                <div class="alert alert-success" style="margin-top:20px"><a href="#" class="close" data-dismiss="alert">&times;</a><?php echo e(session('success')); ?></div>
            </div>
        <?php endif; ?>

        <div id="accounterTable">
            <?php echo $__env->make('backend.includes.tableAccounter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <br><br>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    @parent
    <script>
        $(document).ready(function(){
            $('#info').hide();
        });

        /*function deleteAccounter(){
            if(confirm("Wollen Sie diesen Buchhalter wirklich löschen?"))
                return true;
            else
                return false;
        }*/
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.masterBackend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>