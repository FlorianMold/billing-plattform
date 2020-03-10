@extends('layouts.master')

<!-- Header, Standardheader wird überschrieben -->
<div class="row">
    <br>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-4 col-xs-8 col-sm-8 col-md-6 col-lg-4">
            <img src="../img/elk.jpg" class="img-responsive" alt="Elk Firmenlogo">
        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-- Hauptteil -->
@section('content')
    <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-3 col-xs-10 col-sm-10 col-md-8 col-lg-6">

        <!-- Fehler der Form werden hier ausgegeben -->
        @if ($errors->any())
            <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                    <br>
                @endforeach
            </div>
        @endif

        <!-- Meldungen aus der Session werden hier ausgegeben -->
            @if (session('status'))
                <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ session('status') }}
                    <br>
                </div>
            @endif

        <!-- Passwort ändern Form -->
        {!! Form::open(array('url' => array('changePassword', $user->id))) !!}

            <!-- Eingabefeld für die E-Mail -->
        <div class="form-group">
            {!! Form::label('email_label', 'E-Mail:') !!}
            {!! Form::text('email', $user->email,  array('class' => 'form-control', 'readonly')) !!}
        </div>

        <!--Eingabefeld für die alte E-Mail -->
        <div class="form-group">
            {!! Form::label('old_password_label', 'Geben Sie ihr altes Passwort ein:') !!}
            {!! Form::password('old_password', array('class' => 'form-control')) !!}

        </div>

                <!--Eingabefeld für das neue Passwort E-Mail -->
                <div class="form-group">
            {!! Form::label('new_password_label', 'Geben Sie ihr neues Passwort ein:') !!}
            {!! Form::password('new_password', array('class' => 'form-control')) !!}
        </div>

            <!-- Eingabefeld zum Wiederholen des Passwortes -->
        <div class="form-group">
            {!! Form::label('repeat_new_password_label', 'Geben Sie ihr neues Passwort erneut ein:') !!}
            {!! Form::password('repeat_new_password', array('class' => 'form-control')) !!}

        </div>

            <!-- Submitbutton zum Absenden der Form -->
        {!! Form::submit('Ändern', array('class'=>'btn btn-block btn-primary')) !!}

    </div>
    <div class="clearfix"></div>
@stop


<!-- Titel der Webseite -->
@section('title', 'Passwort zurücksetzen')

<!-- Überschreiben des Headers -->
@section('header')
@overwrite
