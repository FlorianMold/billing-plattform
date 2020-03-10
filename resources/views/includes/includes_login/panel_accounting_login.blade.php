<!-- Panel zum Anzeigen des Buchhaltungslogin -->
<div class="tab-pane" id="panel_accounting_login">
    <div class="row">
        <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">

            <!-- Login Form -->
            {!! Form::open(array('url' => 'loginAccounting', 'class' => 'form-horizontal')) !!}

            <!-- E-Mail Adresse Feld -->
            <div class="form-group">
                <br>
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                {!! Form::label('email_label', 'E-Mail:', array('class' => 'control-label')) !!}
                    </div>

                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                    {!! Form::text('email_accounting', null,  array('class' => 'form-control')) !!}
                </div>
            </div>


            <!-- Passwortfeld -->
            <div class="form-group">
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                {!! Form::label('password_label', 'Passwort:', array('class' => 'control-label')) !!}
                </div>

                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                    {!! Form::password('password_accounting', array('class' => 'form-control')) !!}
                </div>
            </div>


            <!-- Submitbutton -->
            <div class="form-group">
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                    {!! Form::submit('Anmelden',array('class' => 'btn btn-default pull-right')) !!}
                </div>
            </div>


            {!! Form::close() !!}
            <!-- Ende der Login Form -->

        </div>
    </div>
    <div class="clearfix"></div>

    <div class="form-group">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <a href="#" class="pull-right" data-toggle="modal" data-target="#reset_password_popup">Passwort vergessen?</a>
        </div>
        <br>
    </div>


</div>