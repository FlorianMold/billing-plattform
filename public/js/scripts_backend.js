$(function() {
    // Rechnungsarten, Email, Standorte und Währungen verwalten -----------------------------------------
    // verwendet, um die script-Operationen auch in den folgenden neu geladenen Teilen der Seit verwenden zu können
    //      müssen nämlich im neu geladenen Teil auch wieder geladen werden, ansonst funktionieren sie nicht
    all();

    /*function deleteLocation(Id){
        var id = Id;
        var x = confirm("Wollen Sie diese Firma wirklich löschen? Es ist möglich, dass dadurch in einer Rechnung oder einen Lieferanten ein Fehler auftritt");
        if(x == true)
            window.location = "{{ URL::to('backend/location/delete/') }}"+id;
    }*/

});

function all() {
    // die Währungen und Standorte mit den Forms ausblenden
    $('[class^=form_]').hide();
    // die Rechnungstypen mit den Forms ausblenden
    $('[class^=billtype_form_]').hide();

    // das ajax funktioniert
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

//-------------------------------------------------- EMAIL verwalten -----------------------------------------------------------
    $('.removeAdminEmail').on('click', function(){
        $('.success_admin').hide();
        $('.emailAdminInfo').val('');
    });
    $('.submit_adminEmail').on('click', function(){
        $('.success_admin').show();
    });
    $('.removeAccountingEmail').on('click', function(){
        $('.success_accountingSystem').hide();
        $('.emailAccountingSystem').val('');
    });
    $('.submit_accountingEmail').on('click', function(){
        $('.success_accountingSystem').show();
    });
    $('.removeAccounterEmail').on('click', function(){
        $('.success_accounter').hide();
        $('.emailAccounter').val('');
    });
    $('.submit_accounterEmail').on('click', function(){
        $('.success_accounter').show();
    });

//------------------------------------------------------ Company ------------------------------------------------------------
    // AddCompany
    $('.addCompany').on('click', function () {
        var td_id = '.' + $(this).closest("tr").attr('class');
        var short = $(td_id + ' .short').val();
        var name = $(td_id + ' .name').val();

        $.ajax({
            url: '/backend/location/add',
            type: "post",
            data: {
                short: short,
                name: name
            },
            success: function (data) {
                $('#info').show();
                // Erfolgmeldung
                $('#info').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>Der Standort wurde erfolgreich angelegt!</div>');
                // Tabelle selbst umschreiben
                $('#tableCompany').load('/backend/location/table', function () {
                    all();
                });
            },
            error: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>Der Standort konnte leider nicht angelegt werden! Prüfen Sie, ob es den Namen oder das Kürzel bereits gibt.</div>');
            }
        });
    });

    // edit Company
    $('.editCompany').on('click', function () {
        $('#info').hide();
        var td_id = $(this).closest("tr").attr('class');
        var id_split = td_id.split('_');
        var id = id_split[1];

        $('.' + td_id).hide();
        $('.form_' + id).show();
    });

    // update Company
    $('.updateCompany').on('click', function () {
        var td_id = $(this).closest("tr").attr('class');
        var id_split = td_id.split('_');
        var id = id_split[1];

        var short = $('.form_' + id + ' .short').val();
        var name = $('.form_' + id + ' .name').val();

        $.ajax({
            url: '/backend/location/update',
            type: "post",
            data: {
                short: short,
                name: name
            },
            success: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>Der Standort wurde erfolgreich geändert!</div>');
                // Tabelleninhalt umschreiben
                $('.' + td_id).hide();
                $('.normal_' + id + ' .name').html(name);
                $('.normal_' + id).show();
            },
            error: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>Der Standort konnte leider nicht geändert werden! Prüfen Sie, ob es den Namen oder das Kürzel bereits gibt.</div>');
            }
        });
    });


// --------------------------------------------------- Currency --------------------------------------------------------------------
    // Add Currency
    $('.addCurrency').on('click', function () {
        var td_id = '.' + $(this).closest("tr").attr('class');
        var short = $(td_id + ' .short').val();
        var name = $(td_id + ' .name').val();

        $.ajax({
            url: '/backend/currency/add',
            type: "post",
            data: {
                short: short,
                name: name
            },
            success: function (data) {
                $('#info').show();
                // Erfolgmeldung
                $('#info').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>Die Währung wurde erfolgreich hinzugefügt!</div>');
                // Tabelle selbst umschreiben
                $('#tableCurrency').load('/backend/currency/table', function () {
                    all();
                });
            },
            error: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>Die Währung konnte lieder nicht hinzugefügt werden! Prüfen Sie, ob es den Namen oder das Kürzel bereits gibt.</div>');
            }
        });
    });

    // edit Currency
    $('.editCurrency').on('click', function () {
        $('#info').hide();
        var td_id = $(this).closest("tr").attr('class');
        var id_split = td_id.split('_');
        var id = id_split[1];

        $('.' + td_id).hide();
        $('.form_' + id).show();
    });

    // update Currency
    $('.updateCurrency').on('click', function () {
        var td_id = $(this).closest("tr").attr('class');
        var id_split = td_id.split('_');
        var id = id_split[1];

        var id = $('.form_' + id + ' .id').val();
        var short = $('.form_' + id + ' .short').val();
        var name = $('.form_' + id + ' .name').val();

        $.ajax({
            url: '/backend/currency/update',
            type: "post",
            data: {
                id: id,
                short: short,
                name: name
            },
            success: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>Die Währung wurde erfolgreich geändert!</div>');
                // Tabelleninhalt umschreiben
                $('.' + td_id).hide();
                $('.normal_' + id + ' .short').html(short);
                $('.normal_' + id + ' .name').html(name);
                $('.normal_' + id).show();
            },
            error: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>Die Währung konnte leider nicht geändert werden! Prüfen Sie, ob es den Namen oder das Kürzel bereits gibt.</div>');
            }
        });
    });


//--------------------------------------------------- Billtypes verwalten -------------------------------------------------------
    // edit der Billtypes
    $('[class^=billtype_normal_]').on('click', function(){
        $('#info').hide();
        var a_id = $(this).closest("a").attr('class');
        var idSplit = a_id.split(' ');
        var idSplit2 = idSplit[0].split('_');
        var id_list = idSplit2[2];

        $('.billtype_normal_'+id_list).hide();
        $('.billtype_form_'+id_list).show();
    });

    // update der Billtypes
    $('.updateBilltype').on('click', function(){
        var a_id = $(this).closest("a").attr('class');
        var idSplit = a_id.split(' ');
        var idSplit2 = idSplit[0].split('_');
        var id_list = idSplit2[2];

        var id = $('.billtype_form_' + id_list + ' .id').val();
        var name = $('.billtype_form_' + id_list + ' .name').val();
        var short = $('.billtype_form_' + id_list + ' .short').val();

        $.ajax({
            url: '/backend/billtype/update',
            type: "post",
            data: {
                id: id,
                name: name,
                short: short
            },
            success: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>Die Rechnungsart wurde erfolgreich geändert!</div>');
                // Liste umschreiben
                /*$('#listBilltype').load('/backend/billtype/list', function () {
                    all();
                });*/
                $('.billtype_form_' + id_list).hide();
                $('.billtype_normal_' + id_list).html(name + " (" + short + ")");
                $('.billtype_normal_' + id_list).show();
            },
            error: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>Die Rechnungsart konnte leider nicht geändert werden! Prüfen Sie, ob es den Namen oder das Kürzel bereits gibt.</div>');
            }
        });
    });

    // add Billtype
    $('.insertBilltype').on('click', function(){
        $('#info').hide();
        var a_id = $(this).closest("a").attr('class');
        var idSplit = a_id.split(' ');
        var id_list = idSplit[0];

        var name = $('.' + id_list + ' .name').val();
        var short = $('.' + id_list + ' .short').val();

        $.ajax({
            url: '/backend/billtype/add',
            type: "post",
            data: {
                name: name,
                short: short
            },
            success: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>Die Rechnungsart wurde erfolgreich hinzugefügt!</div>');
                // Liste umschreiben
                $('#listBilltype').load('/backend/billtype/list', function () {
                    all();
                });
            },
            error: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>Die Rechnungsart konnte leider nicht hinzugefügt werden! Prüfen Sie, ob es den Namen oder das Kürzel bereits gibt.</div>');
            }
        });
    });

    // delete Billtype
    /*$('.deleteBilltype').on('click', function(){
        $('#info').hide();
        var a_id = $(this).closest("a").attr('class');
        var idSplit = a_id.split(' ');
        var idSplit2 = idSplit[0].split('_');
        var id = idSplit2[2];

        var id = $('.billtype_form_' + id + ' .id').val();

        $.ajax({
            url: '/backend/billtype/delete',
            type: "post",
            data: {
                id: id
            },
            success: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-success">Die Rechnungsart wurde erfolgreich gelöscht!</div>');
                // Liste umschreiben
                $('#listBilltype').load('/backend/billtype/list', function () {
                    all();
                });
            },
            error: function (data) {
                $('#info').show();
                $('#info').html('<div class="alert alert-danger">Die Rechnungsart konnte leider nicht gelöscht werden!</div>');
            }
        });
    });*/

//--------------------------------------------------- Buchhalter verwalten -----------------------------------------------------------
    $('.addAccounter').on('click', function() {
        $('.successAlert').hide();
        $('#info').hide();

        $.ajax({
            url: '/backend/accounter/add',
            type: "post",
            data: {
                username: $('.formAddAccounter .username').val(),
                email: $('.formAddAccounter .email').val()
            },
            success: function (data) {
                $('#info').show();
                $('#infoText').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>Der Buchhalter "' + $('.formAddAccounter .username').val() + '" kann sich jetzt mit dem Passwort "Test123!" anmelden!</div>');
                // Tabelle aktualisieren
                $('#accounterTable').load('/backend/accounter/table', function () {
                    all();
                    $('.dataTables').DataTable({
                        "aoColumns": [{"bSortable": true, "searchable": true}, {"bSortable": true, "searchable": true}, {"bSortable": false, "searchable": true}],
                        responsive: true,
                        "language": {
                            "search": "Suche:",
                            "lengthMenu": "_MENU_ Einträge pro Seite anzeigen",
                            "zeroRecords": "Es gibt keine Einträge!",
                            "info": "Seite _PAGE_ von _PAGES_",
                            "infoEmpty": "Keine Einträge verfügbar!",
                            "infoFiltered": "(von _MAX_ Einträgen gefiltert)",
                            "oPaginate": {
                                sFirst: "Erste",
                                sLast: "Letzte",
                                sNext: "Nächste",
                                sPrevious: "Vorherige"
                            }
                        }
                    });
                });

            },
            error: function (data) {
                $('#info').show();
                $('#infoText').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>Der Buchhalter konnte leider nicht erstellt werden! Prüfen Sie, ob bereits ein Buchhalter oder ein Lieferant diesen Benutzernamen oder diese E-Mail angegeben hat.</div>');
            }
        });
    });
}