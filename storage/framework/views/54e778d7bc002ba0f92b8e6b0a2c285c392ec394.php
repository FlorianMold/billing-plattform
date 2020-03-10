<div class="tab-pane active" id="panel_supplier_login">
    <p>

    <div class="row">

        <div class="col-md-3">

        </div>
        <div class="col-md-6">


            <?php echo Form::open(array('url' => 'loginSupplier', 'class' => 'form-horizontal')); ?>


            <div class="form-group">

                <?php echo Form::label('email_label', 'E-Mail', array('class' => 'col-sm-4 control-label')); ?>


                <div class="col-sm-8">
                    <?php echo Form::text('email', null,  array('class' => 'form-control', 'placeholder' => 'E-Mail')); ?>

                </div>

            </div>
            <div class="form-group">

                <?php echo Form::label('password_label', 'Passwort', array('class' => 'col-sm-4 control-label')); ?>



                <div class="col-sm-8">
                    <?php echo Form::password('password', array('class' => 'form-control', 'placeholder' => 'Passwort')); ?>

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-2">
                    <?php echo Form::button('Registieren', array('class' => 'btn btn-default', 'data-toggle' => 'modal', 'data-target' => '#register_supplier_popup_login')); ?>

                </div>

                <div class="col-sm-offset-3 col-sm-2">
                    <?php echo Form::submit('Anmelden', array('class' => 'btn btn-default')); ?>

                </div>


            </div>

            <?php echo Form::close(); ?>


            <div class="form-group">
                <div class="col-sm-offset-9 col-sm-9">
                    <a href="#" class="pull-right" data-toggle="modal" data-target="#reset_password_popup">Passwort vergessen?</a>

                </div>
            </div>
        </div>

    </div>

    </p>

</div>