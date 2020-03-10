<div class="col-md-12">
    <h3 class="page-header text-center">gesperrte Buchhalter</h3>
</div>
<div class="col-md-1"></div>
<div class="col-md-10">
    <div class="dataTable_wrapper">
        <table class="table table-striped responsive no-wrap  table-bordered table-hover dataTables" width="100%">
            <thead>
            <tr>
                <th>Benutzername</th>
                <th>E-Mail</th>
                <th>Aktion</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="color: transparent;">Benutzername</td> <!-- <?php echo Form::text('username', null, array('class' => 'form-control username')); ?> -->
                <td style="color: transparent;">E-Mail</td> <!-- <?php echo Form::text('email', null, array('class' => 'form-control email')); ?> -->
                <td class="text-center">
                    <a data-toggle="modal" data-target="#popup_addAccounter" class="btn btn-success btn-sm text-center" data-toggle="tooltip" data-placement="top" title="Buchhalter hinzufügen"><span class="glyphicon glyphicon-plus"></span></a>
                </td>
            </tr>

            <?php foreach($readyAccounter as $item): ?>
                <tr class="readyAccounter">
                    <td class="username"><?php echo e($item->username); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td class="text-center">
                        <a href="/backend/accounter/accept/<?php echo e($item->id); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Buchhalter freischalten"><span class="glyphicon glyphicon-ok" ></span></a>
                        <a href="/backend/accounter/delete/<?php echo e($item->id); ?>" onclick="return deleteAccounter()" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Buchhalter löschen"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<div class="col-md-12">
    <h3 class="page-header text-center">freigeschaltete Buchhalter</h3>
</div>
<div class="col-md-1"></div>
<div class="col-md-10">
    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered responsive no-wrap table-hover dataTables" width="100%">
            <thead>
                <tr>
                    <th>Benutzername</th>
                    <th>E-Mail</th>
                    <th>Aktion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($acceptAccounter as $item): ?>
                    <tr>
                        <td><?php echo e($item->username); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td class="text-center">
                            <a href="/backend/accounter/lock/<?php echo e($item->id); ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Buchhalter sperren"><span class="glyphicon glyphicon-lock"></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- PopUp zum Buchhalter erstellen -->
<div id="popup_addAccounter" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Buchhalter hinzufügen</h4>
            </div>
            <div class="modal-body">
                <!--<?php echo e(Form::open(array('url' => '/backend/accounter/add'))); ?>-->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 formAddAccounter">
                        <label>Benutzername:</label>
                        <?php echo Form::text('username', null, array('class' => 'form-control username', 'placeholder' => 'Benutzername')); ?>

                        <br>
                        <label>E-Mail:</label>
                        <?php echo Form::text('email', null, array('class' => 'form-control email', 'placeholder' => 'E-Mail')); ?>

                        <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Zum Schließen des Modals -->
                    <?php echo Form::button('Schließen', array('class' => 'btn btn-default', 'data-dismiss' =>'modal')); ?>


                            <!-- Für das Absenden der Form -->
                    <?php echo Form::button('Hinzufügen', array('class' => 'btn btn-primary addAccounter', 'type' => 'submit', 'data-dismiss' =>'modal')); ?>

                </div>
                <!--<?php echo e(Form::close()); ?>-->
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('js'); ?>
    @parent
    <script>
        function deleteAccounter(){
            if(confirm("Wollen Sie diesen Buchhalter wirklich löschen?"))
                return true;
            else
                return false;
        }
    </script>
<?php $__env->stopSection(); ?>