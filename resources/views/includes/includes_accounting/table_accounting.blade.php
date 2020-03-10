<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">

	<!-- Hier werden Statusmeldungen angezeigt -->
	@if (session('status'))
		<div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a>
			{{ session('status') }}
			<br>
		</div>
	@endif

	@if (session('error'))
		<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>
			{{ session('error') }}
			<br>
		</div>
		@endif

	<!-- Rechnungstabelle-->
	<table class="table table-striped table-bordered table-hover dataTables dt-responsive nowrap" width="100%">
		<thead>
			<tr>
				<th>Lieferantenname</th>
				<th>Rechnungsnummer</th>
				<th><p class="hidden-sm hidden-md hidden-lg">Rechnung holen</p></th>
				<th><p class="hidden-sm hidden-md hidden-lg">Rechnung ansehen</p></th>
				<th><p class="hidden-sm hidden-md hidden-lg">Metadaten anzeigen</p></th>
				<th><p class="hidden-sm hidden-md hidden-lg">Rechnung löschen</p></th>
				<th><p class="hidden-sm hidden-md hidden-lg">Benachrichtigung anzeigen</p></th>
			</tr>
		</thead>
		<tbody>
			@foreach($billinfo as $item)
			<tr>
				<td>{{$item->adr_name}}</td>
				<td>{{$item->id}}</td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					<!-- Rechnungsenden Methode -->
					<a href="sendbill/{{$item->id}}" class="btn btn-success btn-sm"  data-placement="top" title="Rechnung holen"><span class="glyphicon glyphicon-save"></span></a>
				</td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					<!-- PDF anzeigen -->
					<a class="btn btn-success btn-sm" href="pdfs/{{$item->pdf_name}}" data-placement="top" target="_blank" title="Rechnung ansehen"><span class="glyphicon glyphicon-eye-open"></span></a>
				</td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					<!-- Modal anzeigen Methode -->
					<a class="btn btn-primary btn-sm" onclick='fillmodalMeta("{{$item->companyid}}", "{{$item->supplierid}}", "{{$item->date}}", "{{$item->currency_name}}", "{{$item->amount}}", "{{$item->tax_amount}}", "{{$item->external_billnumber}}", "{{$item->type_name}}")' data-placement="top" title="Metadaten anzeigen"><span class="glyphicon glyphicon-search"></span></a>
				</td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					<!-- Rechnungs löschen Methode-->
					<a class="btn btn-danger btn-sm" data-placement="top" title="Rechnung löschen" onclick='deletebill("{{$item->id}}", "{{$item->adr_name}}", "{{$item->supplierid}}")'><span class="glyphicon glyphicon-remove"></span></a>
				</td>
				<!-- Falls eine Benachrichtigung existiert wird der Anzeigen Button angezeigt -->
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					@if (isset($item->mail_title))
					<a class="btn btn-warning btn-sm" onclick='fillmodalNoti({{$item->id}})' data-placement="top" title="Benachrichtigung anzeigen"><span class="glyphicon glyphicon-warning-sign"></span></a>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		<br>
</div>
<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">
<a class="btn btn-info pull-right" onclick='getAllBills()'><span class="glyphicon glyphicon-arrow-down "></span> offene Rechnungen verarbeiten</a>
	</div>

<div class="clearfix"></div>