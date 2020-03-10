<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-3 col-xs-10 col-sm-10 col-md-8 col-lg-6">

    <!-- Hier werden Fehler der Form ausgegeben -->
    <?php if($errors->has()): ?>
        <div class="alert alert-danger">
            <?php foreach($errors->all() as $error): ?>
                <?php echo e($error); ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <h3 class="text-center">Setzen Sie ihr Passwort zurück!</h3>
    <h4 class="text-center"><b><?php echo e($user->username); ?></b></h4> <br>

    <!-- Form zum Zurücksetzen des Passworts -->
    <?php echo Form::open(array('url' => array('resetPassword', $user->id))); ?>


    <!-- Eingabefeld für das neue Passwort -->
    <div class="form-group">
        <?php echo Form::label('password_label', 'Geben Sie ihr neues Passwort ein'); ?>

        <?php echo Form::password('newpassword', array('class' => 'form-control')); ?>

    </div>

    <!-- Eingabefeld für das Wiederholen des Passworts -->
    <div class="form-group">
        <?php echo Form::label('repeatpassword_label', 'Geben Sie ihr neues Passwort erneut ein'); ?>

        <?php echo Form::password('repeat_newpassword', array('class' => 'form-control')); ?>

    </div>
    <hr>

    <!-- Submitbutton zum Absenden der Form-->
        <?php echo Form::submit('Absenden', array('class'=>'btn btn-block btn-primary')); ?>



    <?php echo Form::close(); ?>

    <!-- Ende der Form -->

</div>
<div class="clearfix"></div>