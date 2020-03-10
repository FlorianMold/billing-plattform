<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th hidden>Id</th>
        <th>Währungskürzel</th>
        <th>Währungsname</th>
        <th>Aktion</th>
    </tr>
    </thead>
    <tbody>
    @foreach($currency as $item)
        <tr class="normal_{{ $item->id }}">
            <td class="id" hidden>{{ $item->id }}</td>
            <td class="short">{{ $item->currency_short }}</td>
            <td class="name">{{ $item->currency_name }}</td>
            <td class="text-center">
                <a class="btn btn-info btn-md text-center editCurrency" data-toggle="tooltip" data-placement="top" title="Währung bearbeiten"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
        </tr>
        <tr hidden></tr>
        <tr class="form_{{ $item->id }}">
            <td hidden>{!! Form::text('id', $item->id, array('readonly', 'class' => 'form-control id')) !!}</td>
            <td>{!! Form::text('short', $item->currency_short, array('class' => 'form-control short')) !!}</td>
            <td>{!! Form::text('name', $item->currency_name, array('class' => 'form-control name')) !!}</td>
            <td class="text-center">
                <a class="btn btn-success btn-md text-center updateCurrency" data-toggle="tooltip" data-placement="top" title="Änderungen speichern"><span class="glyphicon glyphicon-ok"></span></a>
            </td>
        </tr>
    @endforeach
    <tr class="add_form">
        <td hidden></td>
        <td>{!! Form::text('short', null, array('class' => 'form-control short', 'placeholder' => 'Währungszeichen')) !!}</td>
        <td>{!! Form::text('name', null, array('class' => 'form-control name', 'placeholder' => 'Währungsname')) !!}</td>
        <td class="text-center">
            <a class="btn btn-success btn-md text-center addCurrency" data-toggle="tooltip" data-placement="top" title="Währung hinzufügen"><span class="glyphicon glyphicon-plus"></span></a>
        </td>
    </tr>
    </tbody>
</table>