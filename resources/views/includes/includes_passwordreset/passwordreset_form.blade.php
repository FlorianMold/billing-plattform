<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-3 col-xs-10 col-sm-10 col-md-8 col-lg-6">

    <!-- Hier werden Fehler der Form ausgegeben -->
    @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <h3 class="text-center">Setzen Sie Ihr Passwort zurück!</h3>
    <h4 class="text-center"><b>{{$user->username}}</b></h4> <br>

    <!-- Form zum Zurücksetzen des Passworts -->
    {!! Form::open(array('url' => array('resetPassword', $user->id))) !!}

    <!-- Eingabefeld für das neue Passwort -->
    <div class="form-group">
        {!! Form::label('password_label', 'Geben Sie Ihr neues Passwort ein:') !!}
        {!! Form::password('newpassword', array('class' => 'form-control')) !!}
    </div>

    <!-- Eingabefeld für das Wiederholen des Passworts -->
    <div class="form-group">
        {!! Form::label('repeatpassword_label', 'Geben Sie Ihr neues Passwort erneut ein:') !!}
        {!! Form::password('repeat_newpassword', array('class' => 'form-control')) !!}
    </div>
    <hr>

    <!-- Submitbutton zum Absenden der Form-->
        {!! Form::submit('Absenden', array('class'=>'btn btn-block btn-primary')) !!}


    {!! Form::close() !!}
    <!-- Ende der Form -->

</div>
<div class="clearfix"></div>