<div id="change_password_popup" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Passwort ändern</h4>
            </div>

            <div class="modal-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Benutzername:</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>altes Passwort:</label>
                        <input type="password" class="form-control" id="old_password">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>neues Passwort:</label>
                        <input type="password" class="form-control" id="new_password">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>neues Passwort wiederholen:</label>
                        <input type="password" class="form-control" id="repeat_new_password">
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Schließen</button>
                <button class="btn btn-primary" data-dismiss="modal" id="change_password">Speichern</button>
            </div>
        </div>
    </div>
</div>