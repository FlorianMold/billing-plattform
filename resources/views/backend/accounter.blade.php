@extends("layouts.masterBackend")

@section("title", "Buchhalter")

@section("wrapper_content")
    @parent
    <div class="row">
        <!-- zum Ausgäben der Informationen -->
        <div id="info">
            <br>
            <div id="infoText"></div>
        </div>
        @if(session('success'))
            <div class="col-md-12 successAlert">
                <div class="alert alert-success" style="margin-top:20px"><a href="#" class="close" data-dismiss="alert">&times;</a>{{ session('success') }}</div>
            </div>
        @endif

        <div id="accounterTable">
            @include('backend.includes.tableAccounter')
        </div>

        <br><br>
    </div>
@stop

@section('js')
    @parent
    <script>
        $(document).ready(function(){
            $('#info').hide();
        });

        /*function deleteAccounter(){
            if(confirm("Wollen Sie diesen Buchhalter wirklich löschen?"))
                return true;
            else
                return false;
        }*/
    </script>
@stop