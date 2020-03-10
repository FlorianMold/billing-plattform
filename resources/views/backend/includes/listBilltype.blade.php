<div class="list-group">
    @foreach($billtype as $item)
        <a class="billtype_normal_{{ $item->id }} list-group-item mousepointer" data-toggle="tooltip" data-placement="top" title="zum Ändern klicken">{{ $item->type_name }} ({{ $item->billtype_short }})</a>
        <a class="billtype_form_{{ $item->id }} list-group-item mousepointer">
            <div class="col-xs-5 col-md-5">
                {!! Form::hidden('id', $item->id, array('class' => 'id')) !!}
                {!! Form::text('name', $item->type_name, array('class' => 'form-control name')) !!}
            </div>
            <div class="col-xs-5 col-md-5">
                {!! Form::text('short', $item->billtype_short, array('class' => 'form-control short')) !!}
            </div>
            <div class="text-center">
                <button class="btn btn-success btn-sm updateBilltype" data-toggle="tooltip" data-placement="top" title="Änderungen speichern"><span class="glyphicon glyphicon-ok"></span></button>
                <!--<button class="btn btn-danger btn-sm deleteBilltype" data-toggle="tooltip" data-placement="top" title="Rechnungstyp löschen"><span class="glyphicon glyphicon-remove" ></span></button>-->
            </div>
        </a>
    @endforeach

    <a class="add_billtype list-group-item mousepointer">
        <div class="col-xs-5 col-md-5">
            {!! Form::text('name', null, array('class' => 'form-control name', 'placeholder' => 'Rechnungstyp')) !!}
        </div>
        <div class="col-xs-5 col-md-5">
            {!! Form::text('short', null, array('class' => 'form-control short', 'placeholder' => 'Kürzel')) !!}
        </div>
        <div class="text-center">
            <button class="btn btn-success btn-sm insertBilltype" data-toggle="tooltip" data-placement="top" title="Rechnungsart hinzufügen"><span class="glyphicon glyphicon-plus"></span></button>
        </div>
    </a>
</div>