<div class="col-md-3"></div>
<div class="col-md-6">
	<?php if (session('status')): ?>
		<div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a>
			<?php echo e(session('status')); ?>

			<br>
		</div>
	<?php endif; ?>
	<table class="table table-striped table-bordered table-hover dataTables">
		<thead>
			<tr>
				<th>Lieferantenname</th>
				<th>Rechnungsnummer</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($billinfo as $item): ?>
			<tr>
				<td><?php echo e($item->adr_name); ?></td>
				<td><?php echo e($item->id); ?></td>
				<td class="col-md-1 text-center">
					<a href="#" class="btn btn-success btn-sm"  data-placement="top" title="Rechnung holen"><span class="glyphicon glyphicon-save"></span></a>
				</td>
				<td class="col-md-1 text-center">
					<a class="btn btn-success btn-sm" href="pdfs/<?php echo e($item->pdf_name); ?>" data-placement="top" target="_blank" title="Rechnung ansehen"><span class="glyphicon glyphicon-eye-open"></span></a>
				</td>
				<td class="col-md-1 text-center">
					<a class="btn btn-primary btn-sm" onclick='fillmodalMeta("<?php echo e($item->companyid); ?>", "<?php echo e($item->supplierid); ?>", "<?php echo e($item->date); ?>", "<?php echo e($item->currency_name); ?>", "<?php echo e($item->amount); ?>", "<?php echo e($item->tax_amount); ?>", "<?php echo e($item->external_billnumber); ?>", "<?php echo e($item->type_name); ?>")' data-placement="top" title="Metadaten anzeigen"><span class="glyphicon glyphicon-warning-sign"></span></a>
				</td>
				<td class="col-md-1 text-center">
					<a class="btn btn-danger btn-sm" data-placement="top" title="Rechnung löschen" onclick='deletebill("<?php echo e($item->id); ?>", "<?php echo e($item->adr_name); ?>", "<?php echo e($item->supplierid); ?>")'><span class="glyphicon glyphicon-remove"></span></a>
				</td>
				<td class="col-md-1 text-center">
					<?php if (isset($item->mail_title)): ?>
					<a class="btn btn-warning btn-sm" onclick='fillmodalNoti("<?php echo e($item->mail_title); ?>", "<?php echo e($item->mail_desc); ?>")' data-placement="top" title="Benachrichtigung anzeigen"><span class="glyphicon glyphicon-warning-sign"></span></a>
					<?php endif; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<div class="col-md-3"></div>
<div class="clearfix"></div>