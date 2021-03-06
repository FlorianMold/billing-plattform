<!-- Modal zum Anzeigen der Metadaten-->
<div id="view_metadata_popup" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Metadaten ansehen</h4>
                </div>

                <div class="modal-body">
                    <!-- Firmennummer -->
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <?php echo Form::label('companynumber_label', 'Firmennummer:'); ?>

                            <?php echo Form::text(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'companyid')); ?>

                        </div>
                    </div>

                    <!-- Lieferantennummer-->
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <?php echo Form::label('suppliernumber_label', 'Lieferantennummer:'); ?>

                            <?php echo Form::text(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'supplierid')); ?>

                        </div>
                    </div>

                    <!-- Belegdatum-->
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <?php echo Form::label('slip_date_label', 'Belegdatum:'); ?>

                            <?php echo Form::text(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'date')); ?>

                        </div>
                    </div>

                    <!-- Währung -->
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <?php echo Form::label('currency_label', 'Währung:'); ?>

                            <?php echo Form::text(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'currencyname')); ?>

                        </div>
                    </div>

                    <!-- Betrag -->
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <?php echo Form::label('amount_label', 'Betrag:'); ?>

                            <?php echo Form::text(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'amount')); ?>

                        </div>
                    </div>

                    <!-- Steuerbetrag -->
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <?php echo Form::label('tax_amount_label', 'Steuerbetrag: (%)'); ?>

                            <?php echo Form::text(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'tax_amount')); ?>

                        </div>
                    </div>

                    <!-- Externe Rechnungsnummer -->
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <?php echo Form::label('external_billnumber_label', 'externe Rechnungsnummer:'); ?>

                            <?php echo Form::text(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'external_billnumber')); ?>

                        </div>
                    </div>

                <!-- Rechnungstyp -->
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <?php echo Form::label('bill_type_label', 'Art der Rechnung:'); ?>

                            <?php echo Form::text(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'type_name')); ?>

                        </div>
                    </div>

                </div>



                <div class="clearfix"></div>
                <div class="modal-footer">
                    <!-- schließt Modal -->
                    <?php echo Form::button('Schließen', array('class' => 'btn btn-default', 'data-dismiss' => 'modal')); ?>

                </div>
            </div>
            </div>
        </div>
