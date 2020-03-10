<div id="reset_password_popup" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Passwort vergessen</h4>
            </div>

            <div class="modal-body">
                <div id="error_reset"></div>
                <div class="form-group">
                    <?php echo Form::label('username_label', 'Geben Sie ihre E-Mail Adresse an, um ihr Passwort zurücksetzen zu können!'); ?>

                    <?php echo Form::text('forgot_email', null,  array('class' => 'form-control', 'placeholder' => 'E-Mail Adresse')); ?>

                </div>

                <div class="modal-footer">
                    <?php echo Form::button('Schließen', array('class' => 'btn btn-default', 'data-dismiss' => 'modal')); ?>

                    <?php echo Form::button('Zurücksetzen', array('class' => 'reset-btn btn btn-primary')); ?>


                </div>
            </div>
        </div>
    </div>
</div>