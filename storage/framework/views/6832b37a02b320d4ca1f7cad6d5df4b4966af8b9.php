<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">

	<!-- Hier werden Statusmeldungen angezeigt -->
	<?php if(session('status')): ?>
		<div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a>
			<?php echo e(session('status')); ?>

			<br>
		</div>
	<?php endif; ?>

	<?php if(session('error')): ?>
		<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>
			<?php echo e(session('error')); ?>

			<br>
		</div>
		<?php endif; ?>

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
			<?php foreach($billinfo as $item): ?>
			<tr>
				<td><?php echo e($item->adr_name); ?></td>
				<td><?php echo e($item->id); ?></td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					<!-- Rechnungsenden Methode -->
					<a href="sendbill/<?php echo e($item->id); ?>" class="btn btn-success btn-sm"  data-placement="top" title="Rechnung holen"><span class="glyphicon glyphicon-save"></span></a>
				</td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					<!-- PDF anzeigen -->
					<a class="btn btn-success btn-sm" href="pdfs/<?php echo e($item->pdf_name); ?>" data-placement="top" target="_blank" title="Rechnung ansehen"><span class="glyphicon glyphicon-eye-open"></span></a>
				</td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					<!-- Modal anzeigen Methode -->
					<a class="btn btn-primary btn-sm" onclick='fillmodalMeta("<?php echo e($item->companyid); ?>", "<?php echo e($item->supplierid); ?>", "<?php echo e($item->date); ?>", "<?php echo e($item->currency_name); ?>", "<?php echo e($item->amount); ?>", "<?php echo e($item->tax_amount); ?>", "<?php echo e($item->external_billnumber); ?>", "<?php echo e($item->type_name); ?>")' data-placement="top" title="Metadaten anzeigen"><span class="glyphicon glyphicon-search"></span></a>
				</td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					<!-- Rechnungs löschen Methode-->
					<a class="btn btn-danger btn-sm" data-placement="top" title="Rechnung löschen" onclick='deletebill("<?php echo e($item->id); ?>", "<?php echo e($item->adr_name); ?>", "<?php echo e($item->supplierid); ?>")'><span class="glyphicon glyphicon-remove"></span></a>
				</td>
				<!-- Falls eine Benachrichtigung existiert wird der Anzeigen Button angezeigt -->
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
					<?php if(isset($item->mail_title)): ?>
					<a class="btn btn-warning btn-sm" onclick='fillmodalNoti(<?php echo e($item->id); ?>)' data-placement="top" title="Benachrichtigung anzeigen"><span class="glyphicon glyphicon-warning-sign"></span></a>
					<?php endif; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
		<br>
</div>
<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-3 col-xs-10 col-sm-10 col-md-10 col-lg-6">
<a class="btn btn-info pull-right" onclick='getAllBills()'><span class="glyphicon glyphicon-arrow-down "></span> offene Rechnungen verarbeiten</a>
	</div>

<div class="clearfix"></div>