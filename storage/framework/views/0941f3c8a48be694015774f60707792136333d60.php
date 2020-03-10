<div id="register_supplier_popup_login" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lieferant registrieren</h4>
            </div>

            <div class="modal-body">

                <?php echo Form::open(array('url' => '/', 'id' => 'registerform')); ?>

                <div id="error"></div>
                <div class="form-group">
                    <?php echo Form::label('username_label', 'Benutzername:'); ?>

                    <?php echo Form::text('register_suppliername', null,  array('class' => 'form-control')); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('username_label', 'E-Mail:'); ?>

                    <?php echo Form::text('register_supplieremail', null,  array('class' => 'form-control')); ?>

                </div>

                    <div class="form-group">
                        <?php echo Form::label('supplier_number_label', 'Lieferantennummer:'); ?>

                        <select class="form-control" id="select_suppliernumber">
                            <?php foreach ($unsignedsuppliernumbers as $item): ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->id); ?> - <?php echo e($item->adr_name); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                <div class="form-group">
                    <?php echo Form::label('password_label', 'Passwort:'); ?>

                    <?php echo Form::password('register_password', array('class' => 'form-control')); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('repeat_password_label', 'Passwort wiederholen:'); ?>

                    <?php echo Form::password('register_repeatpassword', array('class' => 'form-control')); ?>

                </div>

                <div class="modal-footer">
                    <?php echo Form::button('Schließen', array('class' => 'btn btn-default', 'data-dismiss' => 'modal')); ?>

                    <?php echo Form::button('Registrieren', array('class' => 'register-btn btn btn-primary')); ?>


                </div>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>