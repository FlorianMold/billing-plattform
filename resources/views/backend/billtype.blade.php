@extends('layouts.masterBackend')

@section('title', 'Rechnungstyp')

@section('wrapper_content')
    @parent
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header text-center">Rechnungstypen verwalten</h3>
            <div id='info' class="col-md-12"></div>
        </div>

        <div class="col-md-3"></div>
        <div id="listBilltype" class="col-md-6">
            @include('backend.includes.listBilltype')
        </div>
    </div>
@stop