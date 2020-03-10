<!-- Panel zum Anzeigen des Lieferantenlogins -->
<div class="tab-pane active" id="panel_supplier_login">

    <div class="row">

        <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">
            <!-- Login Form -->
            <?php echo Form::open(array('url' => 'loginSupplier', 'class' => 'form-horizontal')); ?>


                    <!-- E-Mail Adresse Feld -->
            <div class="form-group">
                <br>
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                <?php echo Form::label('email_label', 'E-Mail:', array('class' => 'control-label')); ?>

                    </div>

                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                    <?php echo Form::text('email', null,  array('class' => 'form-control')); ?>

                </div>

            </div>

            <!-- Passwortfeld -->
            <div class="form-group">

                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                <?php echo Form::label('password_label', 'Passwort:', array('class' => 'control-label')); ?>

                </div>

                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                    <?php echo Form::password('password', array('class' => 'form-control')); ?>

                </div>
            </div>

            <!-- Registrierbutton -->
            <div class="form-group">
                <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
                    <?php echo Form::button('Registieren', array('class' => 'btn btn-default', 'data-toggle' => 'modal', 'data-target' => '#register_supplier_popup_login')); ?>

                </div>

                <!-- SubmitButton fürs Anmelden -->
                <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
                    <?php echo Form::submit('Anmelden', array('class' => 'btn btn-default pull-right')); ?>

                </div>


            </div>

            <?php echo Form::close(); ?>

            <!-- Ende der Login Form -->

        </div>
        <!-- Passwort vergessen Modal -->
    </div>
    <div class="clearfix"></div>

    <div class="form-group">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <a href="#" class="pull-right" data-toggle="modal" data-target="#reset_password_popup">Passwort vergessen?</a>
        </div>
        <br>
    </div>


</div>