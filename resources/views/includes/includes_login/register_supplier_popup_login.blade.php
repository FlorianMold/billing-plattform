<!-- Modal für die Registrierung -->
<div id="register_supplier_popup_login" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lieferant registrieren</h4>
            </div>

            <div class="modal-body">
                <!-- Registrierform -->
                <!-- Hier werden die Fehler ausgegeben -->
                <div id="error"></div>

                <!-- Eingabefeld für den Benutzernamen -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    {!! Form::label('username_label', 'Benutzername:') !!}
                    {!! Form::text('register_suppliername', null,  array('class' => 'form-control')) !!}
                </div>
                    </div>

                <!-- Eingabefeld für die Email -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    {!! Form::label('email_label', 'E-Mail:') !!}
                    {!! Form::text('register_supplieremail', null,  array('class' => 'form-control')) !!}
                </div>
                    </div>

                <!-- Eingabefeld für die Lieferantennummer -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        {!! Form::label('supplier_number_label', 'Lieferantennummer:') !!}
                        <select class="form-control" id="select_suppliernumber">
                            @foreach($unsignedsuppliernumbers as $item)
                                <option value="{{$item->id}}">{{$item->id }} - {{$item->adr_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>

                <!-- Eingabefeld für das Passwort -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    {!! Form::label('password_label', 'Passwort:') !!}
                    {!! Form::password('register_password', array('class' => 'form-control')) !!}
                </div>
                    </div>

                <!-- Eingabefeld zum Wiederholen des Passwortes -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    {!! Form::label('repeat_password_label', 'Passwort wiederholen:') !!}
                    {!! Form::password('register_repeatpassword', array('class' => 'form-control')) !!}
                </div>
                    </div>
                <div class="clearfix"></div>

                <div class="modal-footer">
                    <!-- Zum Schließen des Modals -->
                    {!! Form::button('Schließen', array('class' => 'btn btn-default', 'data-dismiss' =>'modal')) !!}

                    <!-- Für das Absenden der Form -->
                    {!! Form::button('Registrieren', array('class'=>'register-btn btn btn-primary')) !!}

                </div>
                <!-- Ende der Form -->
            </div>
        </div>
    </div>
</div>