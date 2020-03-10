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
        <?php foreach($billinfo as $item): ?>
        <tr>
            <td><?php echo e($item->adr_name); ?></td>
            <td><?php echo e($item->id); ?></td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
                <!-- Funktion zum Anzeigen der PDFs -->
                <a class="btn btn-success btn-sm" href="pdfs/<?php echo e($item->pdf_name); ?>" data-placement="top" target="_blank" title="Rechnung ansehen"><span class="glyphicon glyphicon-eye-open"></span></a>
            </td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
                <!-- Funktion zum füllen des Metadatenmodals -->
                <a class="btn btn-primary btn-sm" onclick='fillmodalMeta("<?php echo e($item->companyid); ?>", "<?php echo e($item->supplierid); ?>", "<?php echo e($item->date); ?>", "<?php echo e($item->currency_name); ?>", "<?php echo e($item->amount); ?>", "<?php echo e($item->tax_amount); ?>", "<?php echo e($item->external_billnumber); ?>", "<?php echo e($item->type_name); ?>")' data-placement="top" title="Metadaten anzeigen"><span class="glyphicon glyphicon-search"></span></a>
            </td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center showbtn">
                <!-- prüft ob Rechnung eine Benachrichtigung enthält. Falls nicht kann man eine versenden, falls schon kann man diese betrachten -->
                <?php if(!isset($item->mail_title)): ?>
                    <a class="btn btn-warning btn-sm" data-placement="top" id="open_notification_modal" title="Benachrichtigung senden"><span class="glyphicon glyphicon-warning-sign"></span></a>
                    <div id="show"></div>
                <?php else: ?>
                    <a class="btn btn-warning btn-sm" onclick='fillmodalNoti(<?php echo e($item->id); ?>)' data-placement="top" title="Benachrichtigung anzeigen"><span class="glyphicon glyphicon-align-justify"></span></a>
                <?php endif; ?>
            </td>
        </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>