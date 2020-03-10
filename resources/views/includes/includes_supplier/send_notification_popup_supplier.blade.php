<!-- Form zum versenden der Benachrichtigung -->
<div id="send_notification_popup_supplier" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Benachrichtigung senden</h4>
                </div>

                <div class="modal-body">
                    <div id="error_modal"></div>
                        <div class="form-group">
                            <!-- Titel der Benachrichtigung -->
                            {!! Form::label('title_label', 'Titel:') !!}
                            {!! Form::text('notification_title_supplier', null,  array('class' => 'form-control')) !!}
                    </div>
                        <div class="form-group">
                            <!-- Beschreibung der Benachrichtigung -->
                            {!! Form::label('desc_label', 'Genaue Beschreibung des Problems:') !!}
                            {!! Form::textarea(null, null,  array('class' => 'form-control', 'id' => 'notification_text_supplier', 'style' => 'resize: vertical; max-height: 200px; min-height: 200px;')) !!}
                    </div>
                </div>

                <div class="modal-footer">
                    <!-- Zum Schließen des Modals-->
                    {!! Form::button('Schließen', array('class' => 'btn btn-default', 'data-dismiss' =>'modal')) !!}
                    <!-- Zum Absenden der Benachrichtigung-->
                    {!! Form::button('Senden', array('class' => 'btn btn-primary', 'id' =>'send_notification_supplier')) !!}
                </div>
            </div>
        </div>
    </div>
