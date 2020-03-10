<div class="list-group">
    <?php foreach($billtype as $item): ?>
        <a class="billtype_normal_<?php echo e($item->id); ?> list-group-item mousepointer" data-toggle="tooltip" data-placement="top" title="zum Ändern klicken"><?php echo e($item->type_name); ?> (<?php echo e($item->billtype_short); ?>)</a>
        <a class="billtype_form_<?php echo e($item->id); ?> list-group-item mousepointer">
            <div class="col-xs-5 col-md-5">
                <?php echo Form::hidden('id', $item->id, array('class' => 'id')); ?>

                <?php echo Form::text('name', $item->type_name, array('class' => 'form-control name')); ?>

            </div>
            <div class="col-xs-5 col-md-5">
                <?php echo Form::text('short', $item->billtype_short, array('class' => 'form-control short')); ?>

            </div>
            <div class="text-center">
                <button class="btn btn-success btn-sm updateBilltype" data-toggle="tooltip" data-placement="top" title="Änderungen speichern"><span class="glyphicon glyphicon-ok"></span></button>
                <!--<button class="btn btn-danger btn-sm deleteBilltype" data-toggle="tooltip" data-placement="top" title="Rechnungstyp löschen"><span class="glyphicon glyphicon-remove" ></span></button>-->
            </div>
        </a>
    <?php endforeach; ?>

    <a class="add_billtype list-group-item mousepointer">
        <div class="col-xs-5 col-md-5">
            <?php echo Form::text('name', null, array('class' => 'form-control name', 'placeholder' => 'Rechnungstyp')); ?>

        </div>
        <div class="col-xs-5 col-md-5">
            <?php echo Form::text('short', null, array('class' => 'form-control short', 'placeholder' => 'Kürzel')); ?>

        </div>
        <div class="text-center">
            <button class="btn btn-success btn-sm insertBilltype" data-toggle="tooltip" data-placement="top" title="Rechnungsart hinzufügen"><span class="glyphicon glyphicon-plus"></span></button>
        </div>
    </a>
</div>