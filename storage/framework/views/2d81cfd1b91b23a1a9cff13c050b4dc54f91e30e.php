<?php $__env->startSection("title", "Passwortkriterien"); ?>

<?php $__env->startSection("wrapper_content"); ?>
        @parent
    <!-- Passwortkriterien -->
    <div class="row">
        <div class="col-md-12">
            <?php if(session('success')): ?>
                <div class="alert alert-success" style="margin-top:20px"><a href="#" class="close" data-dismiss="alert">&times;</a><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <!-- Hier werden die Fehler aus der Form angezeigt -->
            <?php if($errors->any()): ?>
                <br>
                <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <?php foreach($errors->all() as $error): ?>
                        <?php echo e($error); ?>

                        <br>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <h3 class="page-header text-center">Passwortkriterien festlegen</h3>
        </div>

        <?php echo Form::open(array('url' => 'backend/setPwCriteria', 'class' => 'form-horizontal')); ?>


            <!-- Buchhaltungkriterien -->
            <div class="col-lg-1 hidden-md hidden-sm"></div>
            <div class="col-md-4 col-lg-3 password_left">
                <h4>Buchhaltung:</h4>

                <!--<div class="col-md-1 hidden-md"></div>-->
                <div class="checkbox">
                    <label>
                        <?php if($pwAccounting->large_lower_case == 1): ?>
                            <?php echo Form::checkbox('writing_accounting', 1, true); ?>

                        <?php else: ?>
                            <?php echo Form::checkbox('writing_accounting', 1); ?>

                        <?php endif; ?>
                        Groß- und Kleinschreibung</label>
                </div>
                <!--<div class="col-md-1 hidden-md"></div>-->
                <div class="checkbox">
                    <label>
                        <?php if($pwAccounting->special_chars == 1): ?>
                            <?php echo Form::checkbox('specialcharacters_accounting', 1, true); ?>

                        <?php else: ?>
                            <?php echo Form::checkbox('specialcharacters_accounting', 1); ?>

                        <?php endif; ?>
                        Sonderzeichen</label>
                </div>
                <!--<div class="col-md-1 hidden-md"></div>-->
                <div class="checkbox" style="margin-bottom: 5px;">
                    <label>
                        <?php if($pwAccounting->number == 1): ?>
                            <?php echo Form::checkbox('numbers_accounting', 1, true); ?>

                        <?php else: ?>
                            <?php echo Form::checkbox('numbers_accounting', 1); ?>

                        <?php endif; ?>
                        Zahlen</label>
                </div>
                <!--<div class="col-md-1 hidden-md"></div>-->
                <p>mind. <?php echo Form::number('mincharacters_accounting', $pwAccounting->min_chars, array('style' => 'width:50px')); ?> Zeichen </p>
                <br>
            </div>

            <!-- Lieferantenkriterien -->
            <div class="col-md-4 col-lg-3 password_left">
                <h4>Lieferant:</h4>

                <!--<div class="col-md-1 hidden-md"></div>-->
                <div class="checkbox">
                    <label>
                        <?php if($pwSupplier->large_lower_case == 1): ?>
                            <?php echo Form::checkbox('writing_supplier', 1, true); ?>

                        <?php else: ?>
                            <?php echo Form::checkbox('writing_supplier', 1); ?>

                        <?php endif; ?>
                        Groß- und Kleinschreibung</label>
                </div>
                <!--<div class="col-md-1 hidden-md"></div>-->
                <div class="checkbox">
                    <label>
                        <?php if($pwSupplier->special_chars == 1): ?>
                            <?php echo Form::checkbox('specialcharacters_supplier', 1, true); ?>

                        <?php else: ?>
                            <?php echo Form::checkbox('specialcharacters_supplier', 1); ?>

                        <?php endif; ?>
                        Sonderzeichen</label>
                </div>
                <!--<div class="col-md-1 hidden-md"></div>-->
                <div class="checkbox" style="margin-bottom: 5px;">
                    <label>
                        <?php if($pwSupplier->number == 1): ?>
                            <?php echo Form::checkbox('numbers_supplier', 1, true); ?>

                        <?php else: ?>
                            <?php echo Form::checkbox('numbers_supplier', 1); ?>

                        <?php endif; ?>
                        Zahlen</label>
                </div>
                <!--<div class="col-md-1 hidden-md"></div>-->
                <p>mind. <?php echo Form::number('mincharacters_supplier', $pwSupplier->min_chars, array('style' => 'width:50px')); ?> Zeichen </p>
                <br>
            </div>

            <!-- Administratorkriterien -->
            <div class="col-md-4 col-lg-3">
                <h4>Administrator:</h4>

                <!--<div class="col-md-1 hidden-md"></div>-->
                <div class="checkbox">
                    <label>
                        <?php if($pwAdmin->large_lower_case == 1): ?>
                            <?php echo Form::checkbox('writing_admin', 1, true); ?>

                        <?php else: ?>
                            <?php echo Form::checkbox('writing_admin', 1); ?>

                        <?php endif; ?>
                        Groß- und Kleinschreibung</label>
                </div>
                <!--<div class="col-md-1 hidden-md"></div>-->
                <div class="checkbox">
                    <label>
                        <?php if($pwAdmin->special_chars == 1): ?>
                            <?php echo Form::checkbox('specialcharacters_admin', 1, true); ?>

                        <?php else: ?>
                            <?php echo Form::checkbox('specialcharacters_admin', 1); ?>

                        <?php endif; ?>
                        Sonderzeichen</label>
                </div>
                <!--<div class="col-md-1 hidden-md"></div>-->
                <div class="checkbox" style="margin-bottom: 5px;">
                    <label>
                        <?php if($pwAdmin->number == 1): ?>
                            <?php echo Form::checkbox('numbers_admin', 1, true); ?>

                        <?php else: ?>
                            <?php echo Form::checkbox('numbers_admin', 1); ?>

                        <?php endif; ?>
                        Zahlen</label>
                </div>
                <!--<div class="col-md-1 hidden-md"></div>-->
                <p>mind. <?php echo Form::number('mincharacters_admin', $pwAdmin->min_chars, array('style' => 'width:50px')); ?> Zeichen </p>
                <br>
            </div>
            <div class="col-md-12">
                <br>
                <?php echo Form::submit('Speichern', array('class' => 'btn btn-primary pull-right')); ?>

            </div>

        <?php echo Form::close(); ?>


    <!-- Passwortintervall -->
        <?php echo Form::open(array('url' => 'backend/setPwInterval', 'class' => 'form-horizontal')); ?>


            <div class="col-md-12">
                <h3 class="page-header text-center">Passwortintervall festlegen</h3>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 password_left">
                <h4>Buchhaltung: </h4>
                <?php echo Form::select('interval_accounting', array('1' => '1 Woche', '2' => '2 Wochen', '3' => '3 Wochen', '4' => '4 Wochen', '5' => '5 Wochen'), $pwAccounting->interval, array('class' => 'form-control mousepointer')); ?>

                <br>
            </div>
            <div class="col-md-3 password_left">
                <h4>Lieferant: </h4>
                <?php echo Form::select('interval_supplier', array('1' => '1 Woche', '2' => '2 Wochen', '3' => '3 Wochen', '4' => '4 Wochen', '5' => '5 Wochen'), $pwSupplier->interval, array('class' => 'form-control mousepointer')); ?>

                <br>
            </div>
            <div class="col-md-3">
                <h4>Administrator: </h4>
                <?php echo Form::select('interval_admin', array('1' => '1 Woche', '2' => '2 Wochen', '3' => '3 Wochen', '4' => '4 Wochen', '5' => '5 Wochen'), $pwAdmin->interval, array('class' => 'form-control mousepointer')); ?>

                <br>
            </div>

            <div class="col-md-12">
                <br>
                <?php echo Form::submit('Speichern', array('class' => 'btn btn-primary pull-right')); ?>

            </div>
        <?php echo Form::close(); ?>

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.masterBackend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>