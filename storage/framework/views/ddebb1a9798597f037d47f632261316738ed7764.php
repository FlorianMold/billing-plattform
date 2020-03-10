<div class="tab-pane" id="panel_accounting_login">
    <p>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">

            <?php echo Form::open(array('url' => 'loginAccounting', 'class' => 'form-horizontal')); ?>


            <div class="form-group">
                <?php echo Form::label('email_label', 'E-Mail', array('class' => 'col-sm-4 control-label')); ?>


                <div class="col-sm-8">
                    <?php echo Form::text('email_accounting', null,  array('class' => 'form-control', 'placeholder' => 'E-Mail')); ?>

                </div>
            </div>


            <div class="form-group">
                <?php echo Form::label('password_label', 'Passwort', array('class' => 'col-sm-4 control-label')); ?>


                <div class="col-sm-8">
                    <?php echo Form::password('password_accounting', array('class' => 'form-control', 'placeholder' => 'Passwort')); ?>

                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-9 col-sm-2">
                    <?php echo Form::submit('Anmelden', array('class' => 'btn btn-default')); ?>

                </div>
            </div>


            <?php echo Form::close(); ?>


        </div>
        <div class="col-md-3">
        </div>
    </div>
    </p>
</div>