@extends("layouts.masterBackend")

@section("title", "Lieferanten")

@section("wrapper_content")
    @parent
    <div class="row">
        @if(!($newSupplier->isEmpty()))
            <div class="col-md-12">
                <h3 class="page-header text-center">neu registrierte Lieferanten</h3>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="dataTable_wrapper">
                    <table class="table table-striped display responsive no-wrap table-bordered table-hover dataTables" width="100%">
                        <thead>
                            <tr>
                                <th>Lieferantennummer</th>
                                <th>Lieferantenbezeichnung</th>
                                <th>Aktion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newSupplier as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->adr_name }}</td>
                                    <td class="text-center">
                                        <a href="acceptSupplier/{{ $item->id }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Lieferant freischalten"><span class="glyphicon glyphicon-ok" ></span></a>
                                        <a href="deleteSupplier/{{ $item->id }}" onclick="return deleteSupplier()" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Lieferant löschen"><span class="glyphicon glyphicon-remove"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        <div class="col-md-12">
            <h3 class="page-header text-center">registrierte aber gesperrte Lieferanten</h3>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="dataTable_wrapper">
                <table class="table table-striped responsive no-wrap  table-bordered table-hover dataTables" width="100%">
                    <thead>
                        <tr>
                            <th>Lieferantennummer</th>
                            <th>Lieferantenbezeichnung</th>
                            <th>Aktion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($readySupplier as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->adr_name }}</td>
                                <td class="text-center">
                                    <a href="acceptSupplier/{{ $item->id }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Lieferant freischalten"><span class="glyphicon glyphicon-ok" ></span></a>
                                    <a href="deleteSupplier/{{ $item->id }}" onclick="return deleteSupplier()" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Lieferant löschen"><span class="glyphicon glyphicon-remove"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-12">
            <h3 class="page-header text-center">freigeschaltete Lieferanten</h3>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered responsive no-wrap table-hover dataTables" width="100%">
                    <thead>
                        <tr>
                            <th>Lieferantennummer</th>
                            <th>Lieferantenbezeichnung</th>
                            <th>Aktion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($acceptSupplier as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->adr_name }}</td>
                                <td class="text-center">
                                    <a href="lockSupplier/{{ $item->id }}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Lieferant sperren"><span class="glyphicon glyphicon-lock"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @stop

@section('js')
    @parent
    <script>
        function deleteSupplier(){
            if(confirm("Wollen Sie diesen Lieferanten wirklich löschen?"))
                return true;
            else
                return false;
        }
    </script>
    @stop



