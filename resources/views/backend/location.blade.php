@extends('layouts.masterBackend')

@section('title', 'Standort')

@section('wrapper_content')
    @parent
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header text-center">Standorte verwalten</h3>
        </div>
        <div class="col-md-12" id="info"></div>

        <div class="col-md-1"></div>
        <div id="tableCompany" class="col-md-10">
            @include('backend.includes.tableCompany')
        </div>
    </div>
    @stop