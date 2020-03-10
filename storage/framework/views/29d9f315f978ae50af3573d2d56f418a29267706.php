<!-- Modal für das Anzeigen der Benachrichtigung-->
    <div id="view_notification_popup_accounting" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Benachrichtigung ansehen</h4>
                </div>

                <div class="modal-body">    <!-- style="height: 330px;" -->
                    <div class="form-group">
                        <div class="form-group">
                            <?php echo Form::label('title_label', 'Titel:'); ?>

                            <?php echo Form::text(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'notification_title_accounting')); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <?php echo Form::label('desc_label', 'Genaue Beschreibung des Problems:'); ?>

                            <?php echo Form::textarea(null, null,  array('class' => 'form-control', 'readonly', 'id' => 'notification_text_accounting', 'style' => 'resize: vertical; max-height: 200px; min-height: 200px;')); ?>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>
        </div>
    </div>