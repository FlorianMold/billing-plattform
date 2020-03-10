<!-- Tabelle für die Rechnungen des jeweiligen Lieferanten -->
<div class="tab-pane active" id="panel_bill">
    <table class="dataTables table table-striped table-bordered table-hover dt-responsive nowrap" cellspacing="0"  width="100%">
        <thead>
        <tr>
            <th>Lieferantenname</th>
            <th>Rechnungsnummer</th>
            <th><p class="hidden-sm hidden-md hidden-lg">Rechnung ansehen</p></th>
            <th><p class="hidden-sm hidden-md hidden-lg">Metadaten ansehen</p></th>
            <th><p class="hidden-sm hidden-md hidden-lg">Benachrichtigung anzeigen</p></th>
        </tr>
        </thead>
        <tbody>
        @foreach($billinfo as $item)
        <tr>
            <td>{{$item->adr_name}}</td>
            <td>{{$item->id}}</td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
                <!-- Funktion zum Anzeigen der PDFs -->
                <a class="btn btn-success btn-sm" href="pdfs/{{$item->pdf_name}}" data-placement="top" target="_blank" title="Rechnung ansehen"><span class="glyphicon glyphicon-eye-open"></span></a>
            </td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
                <!-- Funktion zum füllen des Metadatenmodals -->
                <a class="btn btn-primary btn-sm" onclick='fillmodalMeta("{{$item->companyid}}", "{{$item->supplierid}}", "{{$item->date}}", "{{$item->currency_name}}", "{{$item->amount}}", "{{$item->tax_amount}}", "{{$item->external_billnumber}}", "{{$item->type_name}}")' data-placement="top" title="Metadaten anzeigen"><span class="glyphicon glyphicon-search"></span></a>
            </td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center showbtn">
                <!-- prüft ob Rechnung eine Benachrichtigung enthält. Falls nicht kann man eine versenden, falls schon kann man diese betrachten -->
                @if (!isset($item->mail_title))
                    <a class="btn btn-warning btn-sm" data-placement="top" id="open_notification_modal" title="Benachrichtigung senden"><span class="glyphicon glyphicon-warning-sign"></span></a>
                    <div id="show"></div>
                @else
                    <a class="btn btn-warning btn-sm" onclick='fillmodalNoti({{$item->id}})' data-placement="top" title="Benachrichtigung anzeigen"><span class="glyphicon glyphicon-align-justify"></span></a>
                @endif
            </td>
        </tr>
            @endforeach

        </tbody>
    </table>
</div>