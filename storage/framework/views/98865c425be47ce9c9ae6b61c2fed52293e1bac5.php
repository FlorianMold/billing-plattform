<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>Firmennummer</th>
        <th>Firmenbezeichnung</th>
        <th>Aktion</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($companies as $item): ?>
            <tr class="normal_<?php echo e($item->company_short); ?>">
                <td class="short"><?php echo e($item->company_short); ?></td>
                <td class="name"><?php echo e($item->company_name); ?></td>
                <td class="text-center">
                    <a class="btn btn-info btn-md text-center editCompany" data-toggle="tooltip" data-placement="top" title="Firma bearbeiten"><span class="glyphicon glyphicon-pencil"></span></a>
                </td>
            </tr>
            <tr hidden></tr>
            <tr class="form_<?php echo e($item->company_short); ?>">
                <td><?php echo Form::text('short', $item->company_short, array('readonly', 'class' => 'form-control short')); ?></td>
                <td><?php echo Form::text('name', $item->company_name, array('class' => 'form-control name')); ?></td>
                <td class="text-center">
                    <a class="btn btn-success btn-md text-center updateCompany" data-toggle="tooltip" data-placement="top" title="Änderungen speichern"><span class="glyphicon glyphicon-ok"></span></a>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr class="add_form">
            <td><?php echo Form::text('short', null, array('class' => 'form-control short', 'placeholder' => 'Firmennummer')); ?></td>
            <td><?php echo Form::text('name', null, array('class' => 'form-control name', 'placeholder' => 'Firmenbezeichnung')); ?></td>
            <td class="text-center">
                <a class="btn btn-success btn-md text-center addCompany" data-toggle="tooltip" data-placement="top" title="Firma hinzufügen"><span class="glyphicon glyphicon-plus"></span></a>
            </td>
        </tr>
    </tbody>
</table>