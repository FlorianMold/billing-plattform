<div class="row">
    <br>
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <img src="../img/elk.jpg" class="img-responsive" alt="Elk Firmenlogo">
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="col-md-3">
    </div>
</div>

<?php $__env->startSection('content'); ?>
    <div class="col-md-4"></div>
    <div class="col-md-4">

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

        <?php echo Form::open(array('url' => array('changePassword', $user->id))); ?>


        <div class="form-group">
            <?php echo Form::label('email_label', 'E-Mail:'); ?>


            <?php echo Form::text('email', $user->email,  array('class' => 'form-control', 'readonly')); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('email_label', 'Geben Sie ihr altes Passwort ein:'); ?>

            <?php echo Form::password('old_password', array('class' => 'form-control')); ?>


        </div>

        <div class="form-group">
            <?php echo Form::label('email_label', 'Geben Sie ihr neues Passwort ein:'); ?>

            <?php echo Form::password('new_password', array('class' => 'form-control')); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('email_label', 'Geben Sie ihr neues Passwort erneut ein:'); ?>

            <?php echo Form::password('repeat_new_password', array('class' => 'form-control')); ?>


        </div>

        <?php echo Form::submit('Ändern', array('class' => 'btn btn-block btn-primary')); ?>




    </div>
    <div class="col-md-4"></div>
    <div class="clearfix"></div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title', 'Passwort zurücksetzen'); ?>

<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>