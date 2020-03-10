<!-- dient zum Rechnung hochladen -->
<div class="tab-pane" id="panel_uploadbill">

    <!-- Hier werden die Benachrichtigungen aus der Session angezeigt -->
    @if (session('status_bill'))
        <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ session('status_bill') }}
            <br>
        </div>
    @endif

    <!-- Hier werden die Fehler aus der Form angezeigt -->
    @if ($errors->any())
        <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>
            @foreach ($errors->all() as $error)
                {{ $error }}
                <br>
            @endforeach
        </div>
    @endif

    <div id="errorJavaScript" class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>

    </div>

    <!-- Form für den File Upload -->
    {!! Form::open(array('url' => 'supplier/uploadBill', 'files' => 'true', 'onsubmit' => 'return checkSize(8385000)')) !!}

        <!-- fileinput -->
        <div class="form-group">
            {!! Form::file('bill_pdf', array('id' => 'bill_pdf')) !!}
        </div>

        <br>

        <!-- Metdateneingabe -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <!-- Hier werden die verschiednen Standorte geladen -->
                <label>Firmennummer:</label>
                <select class="form-control mousepointer" name="company_id">
                    @foreach($companies as $item)
                        <option value="{{$item->id}}">{{$item->company_name}} ({{$item->company_short}})</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <!-- Lieferantennummer -->
                <label>Lieferantennummer:</label>
                {!! Form::number('supplier_number', $userinfo->supplier_id, array('readonly', 'class' => 'form-control fa fa-ban')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <!-- Belegdatum -->
                <label>Belegdatum:</label>
                {!! Form::date('document_date', \Carbon\Carbon::now(), array('class' => 'form-control mousepointer')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <!-- lädt die verschiedenen Währungen -->
                <label>Währung:</label>
                <select class="form-control mousepointer" name="currency_id">
                    @foreach($currencies as $item)
                        <option value="{{$item->id}}">{{$item->currency_name}} ({{$item->currency_short}})</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <!-- Rechnungsbetrag -->
                <label>Betrag:</label>
                {!! Form::number('amount', null, array('class' => 'form-control amount', 'step' => '0.01')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <!-- Steuerbetrag -->
                <label>Steuerbetrag:</label>
                {!! Form::number('tax_amount', null, array('class' => 'form-control tax_amount', 'step' => '0.01')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <!-- externe Rechnungsnummer-->
                <label>externe Rechnungsnummer:</label>
                {!! Form::text('external_billnumber', null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <!-- lädt Rechnungsarten-->
                <label>Art der Rechnung:</label>
                <select class="form-control mousepointer" name="billtype_id">
                    @foreach($billtypes as $item)
                        <option value="{{$item->id}}">{{$item->type_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- Ende der Metadateneingabe -->

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <!-- Submitbutton fürs Hochladen -->
                {!! Form::submit('Hochladen', array('class' => 'form-control btn-primary')) !!}
            </div>
        </div>
    {!! Form::close() !!}
        <!-- Form schließen -->
</div>

@section('js')
    @parent
    <!-- überprüft Größe der PDF Datei -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#errorJavaScript').hide();
        });
        function checkSize(max_img_size)
        {
            if($(".amount").val() < 0) {
                $('#errorJavaScript').show();
                $('#errorJavaScript').html('<a href="#" class="close" data-dismiss="alert">&times;</a>Der Betrag dar nicht negativ sein!');
                return false;
            }
            if($(".tax_amount").val() < 0) {
                $('#errorJavaScript').show();
                $('#errorJavaScript').html('<a href="#" class="close" data-dismiss="alert">&times;</a>Der Steuerbetrag dar nicht negativ sein!');
                return false;
            }
            var input = document.getElementById("bill_pdf");
            // check for browser support (may need to be modified)
            if(input.files && input.files.length == 1)
            {
                if (input.files[0].size > max_img_size)
                {
                    $('#errorJavaScript').show();
                    $('#errorJavaScript').html('<a href="#" class="close" data-dismiss="alert">&times;</a>Die PDF darf höchstens ' + (max_img_size/1024/1024).toFixed(3) + 'MB (' + (max_img_size/1024).toFixed(0) + 'KB) groß sein!');
                    return false;
                }
                if (input.files[0].size == 0)
                {
                    $('#errorJavaScript').show();
                    $('#errorJavaScript').html('<a href="#" class="close" data-dismiss="alert">&times;</a>Überprüfen Sie bitte Ihre PDF-Datei, denn sie dürfte kaputt sein! Bitte versuchen Sie es erneut.');
                    return false;
                }
            }

            return true;
        }
    </script>
@endsection