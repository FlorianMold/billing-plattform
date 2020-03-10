@extends('layouts.master')

<!-- Login für die Lieferanten und die Buchhaltung -->
@section('content')
    <!-- Header für Login -->
    <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12">
                <img alt="ELK Firmenlogo" src="img/elk.jpg" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2>
                    Willkommen beim elektronischen Rechnungsaustausch der Firma ELK Fertighaus GmbH!
                </h2>
            </div>
        </div>
        <br>
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="pull-right">
                    <a href="#panel_accounting_login" data-toggle="tab">Buchhaltung</a>
                </li>
                <li class="active pull-right">
                    <a href="#panel_supplier_login" data-toggle="tab">Lieferant</a>
                </li>
            </ul>

            <br>
            <!-- In diesem Div werden die Fehler der Formausgegeben-->
            @if ($errors->any())
                <div class="alert alert-danger fade in"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                        <br>
                    @endforeach
                </div>
            @endif

                    <!-- Hier werden die Meldungen aus der Session ausgegeben-->
            @if (session('status'))
                <div class="alert alert-danger fade in"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ session('status') }}
                    <br>
                </div>
            @endif

                @if (session('success'))
                    <div class="alert alert-success fade in"> <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{ session('success') }}
                        <br>
                    </div>
                    @endif

            <!-- Hier werden die Fehler ausgegeben-->
            <div id="success"></div>

            <div class="tab-content" style="border: 1px solid lightgray">

                <!-- Panel Lieferant -->
                @include('includes.includes_login.panel_supplier_login')

              <!-- Panel Buchhaltung -->
                @include('includes.includes_login.panel_accounting_login')

            </div>

        </div>
        <br>
    </div>
    <div class="clearfix"></div>
@stop
<!-- Ende des Login für die Lieferanten und die Buchhaltung -->


<!-- Hier wird der Header aus dem Template überschrieben, da ein anderer im Login verwendet wird -->
@section('header')
    @overwrite

<!-- Pop-Ups für das Login -->
@section('popups')
    @include('includes.includes_login.register_supplier_popup_login')
    @include('includes.includes_login.reset_password_popup')
    @overwrite
<!-- Ende der Pop-Ups für das Login -->

    <!-- Titel der Webseite-->

@section('title', 'Login')