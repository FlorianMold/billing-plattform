//------------------------------------------------------------------------
// Wenn man über einen Button fährt erscheinen daduch das Tooltip
//------------------------------------------------------------------------
$(document).ready(function () {
    $(function () {
        $('[data-placement="top"]').tooltip()
    });

    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
    }

    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        if(history.pushState) {
            history.pushState(null, null, e.target.hash);
        } else {
            window.location.hash = e.target.hash;
        }
    })
});
//------------------------------------------------------------------------
//Funktion zum Registieren der Lieferanten
//------------------------------------------------------------------------
$(document).ready(function () {
    $('.register-btn').click(function () {

        //Daten aus den Eingabefeldern
        var supplier_username = $('input[name=register_suppliername]').val();
        var password = $('input[name=register_password]').val();
        var repeat_password = $('input[name=register_repeatpassword]').val();
        var supplier_number = $('#select_suppliernumber option:selected').val();
        var register_supplieremail = $('input[name=register_supplieremail]').val();

        //prüft ob alle Felder Werte enthalten
        if (!supplier_username.trim() || !password.trim() || !repeat_password.trim() || null == supplier_number || !register_supplieremail.trim()) {
            $("#error").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a> Bitte füllen Sie alle Felder aus!</div>');
            return;
        }

        //überprüft ob die beiden Passwörter übereinstimmen
        if (password != repeat_password) {
            $("#error").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>Die neuen Passwörter müssen übereinstimmen!</div>');
            return;
        }

        //überprüft die eingegebene E-Mail Adresse auf Gültigkeit
        var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,4})+)$/i);
        var valid = emailRegex.test(register_supplieremail);

        //falls sie nicht gültig ist, wird eine Fehlermeldung ausgegeben
        if (!valid) {
            $("#error").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>Die haben keine valide E-Mail Adresse eingegeben!</div>');
            return;
        }
        //Ajax Request für registieren
        $.ajax({
            url: 'registerSupplier',
            type: "post",
            data: 'supplier_username=' + supplier_username + '&password=' + password + '&supplier_number=' + supplier_number + '&register_supplieremail=' + register_supplieremail,
            dataType: "json",
            success: function (data) {
                //falls die Funktion zurückliefert, dass der Benutzer existiert, wird eine Fehlermeldung ausgegeben
                if (data == 'userexists') {
                    $("#error").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>Benutzername existiert bereits!</div>');
                    return;
                }
                //falls die Funktion zurückliefert, dass die E-Mail Adresse existiert, wird eine Fehlermeldung ausgegeben
                if (data == 'emailexists') {
                    $("#error").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>E-Mail Adresse existiert bereits!</div>');
                    return;
                }
                //falls alles in Ordnung ist, wird ausgegeben, dass die Registration erfolgreich war
                else  {
                    $("#register_supplier_popup_login").modal('hide').data('bs.modal', null);
                    $("#success").html('<div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a>Der Benutzer: <b>' + supplier_username + '</b> wurde erfolgreich registriert!</div>');
                    $("#error").empty();
                    $('#select_suppliernumber :selected').remove();
                    $(':input', '#registerform')
                        .not(':button, :submit, :reset, :hidden')
                        .val('');

                    return;
                }

                //falls das Passwort nicht den Kriterien entspricht, werden die erforderlichen Kriterien ausgegeben
                if ($.isArray(data)) {
                    $("#error").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>Passwort muss ' +
                        $.each(data, function (index, value) {
                            value;
                        }) + ' enthalten!</div>');
                }

            }
        });
    });
});

//------------------------------------------------------------------------
//Funktion für die Passwort vergessen Funktion
//------------------------------------------------------------------------
$(document).ready(function () {
    $('.reset-btn').click(function () {

        //Daten aus den Feldern
        var forgot_email = $('input[name=forgot_email]').val();

        //prüft ob alle Felder ausgefüllt sind
        if (!forgot_email.trim()) {
            $("#error_reset").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>Bitte füllen Sie alle Felder aus!</div>');
            return;
        }

        //überprüft die eingegebene E-Mail Adresse auf Gültigkeit
        var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,4})+)$/i);
        var valid = emailRegex.test(forgot_email);

        //falls sie nicht gültig ist, wird eine Fehlermeldung ausgegeben
        if (!valid) {
            $("#error_reset").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>Sie haben keine E-Mail Adresse eingegeben!</div>');
            return;
        }

        //Ajax Request für Passwort vergessen E-Mail versenden
        $.ajax({
            url: 'resetPasswordMail',
            type: "post",
            data: 'forgot_email=' + forgot_email,
            success: function (data) {
                //falls die E-Mail versendet worden ist, wird eine Erfolgsmeldug ausgegeben
                if (data == 'success') {
                    $("#reset_password_popup").modal('hide').data('bs.modal', null);
                    $("#success").html('<div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a>Eine E-Mail zum Passwort zurücksetzen wurde erfolgreich an Sie versendet!</div>');
                    $('input[name=forgot_email]').val('');
                }
                //falls der Benutzer nicht existiert, wird eine Fehlermeldung ausgegeben
                else if (data == 'usernotfound') {
                    $("#error_reset").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>Die angegebene E-Mail Adresse existiert nicht!</div>');
                }
            }
        });
    });
});

//------------------------------------------------------------------------
//Dient dazu, das man mit Laravel Ajax Requests versenden kann
//------------------------------------------------------------------------
$(document).ready(function () {
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });
});
//------------------------------------------------------------------------
//Funktion zum Löschen von Rechnungen. Als Parameter dienen die Rechnungsnummer, der Lieferantennummer und der Name des Lieferanten
//------------------------------------------------------------------------
function deletebill(billid, supplierid, suppliername) {
    //fragt den Benutzer ob er die Rechnung wirklich löschen will
    var dialog = confirm("Wollen Sie diese Rechnung wirklich löschen?");
    //falls dieser die Abfrage bestätigt wird die Methode ausgeführt, dass die Rechnung gelöscht wird
    if (dialog == true) {
        window.location.href = "deleteBill/" + billid + "/" + supplierid + "/" + suppliername;
    }
}
//------------------------------------------------------------------------
//Funktion, die dazu dient das Modal mit den Metadaten zu füllen. Als Parameter dienen die Metadaten
//------------------------------------------------------------------------
function fillmodalMeta(companyid, supplierid, date, currencyname, amount, tax_amount, external_billnumber, type_name) {
    //Aus der Datenbank kommt ein anderes Datumsformat, daher wird hier das Datumsformat umgebaut
    var datesplit = date.split(" ");
    var splited = datesplit[0].split("-");

    //zeigt das Modal an
    $('#view_metadata_popup').modal('show');

    //füllt die Felder mit den richtigen Werten
    $('#companyid').val(companyid);
    $('#supplierid').val(supplierid);
    $('#date').val(splited[2] + '.' + splited[1] + '.' + splited[0]); //baut Datum mit '.' richtig zusammen
    $('#currencyname').val(currencyname);
    $('#amount').val(amount);
    $('#tax_amount').val(tax_amount);
    $('#external_billnumber').val(external_billnumber);
    $('#type_name').val(type_name);
}
//------------------------------------------------------------------------
//Funktion, die dazu dient das Modal mit der Benachrichtigung zu füllen. Als Parameter dienen der Nachrichtentitel, sowie der Text
//------------------------------------------------------------------------
function fillmodalNoti(id) {

    $.ajax({
        url: 'getModalInfo/'+id,
        type: "GET",
        dataType: "json",
        success: function (data) {
            //zeigt Modal an
            $('#view_notification_popup_accounting').modal('show');

            //füllt die Felder mit den richtigen Werten
           $('#notification_title_accounting').val(data.mail_title);
           $('#notification_text_accounting').val(data.mail_desc);
        }
    });



}
//------------------------------------------------------------------------
//Funktion, die dazu dient eine Benachrichtigung zu versenden
//------------------------------------------------------------------------
$(document).ready(function () {
    //Wenn auf den Button "Benachrichtigung versenden" gedrückt wird
    $('.dataTables tbody').on('click', '#open_notification_modal', function () {

        //wird das Modal geöffnet
        $("#send_notification_popup_supplier").modal();

        //sowie die Rechnungsnummer gespeichert, damit man weiß welcher Rechnung, die Benachrichtigung zuzuordnen ist
        var b_id = $(this).closest("tr").find('td:eq(1)').text();

        //Wenn die Benachrichtigung abgesendet wird
        $('#send_notification_supplier').click(function () {

            //Werte aus den Eingabefeldern
            var notification_title = $('input[name=notification_title_supplier]').val();
            var notification_body = $('#notification_text_supplier').val();

            //prüft ob alle Felder ausgefüllt wurden
            if (!notification_title.trim() || !notification_body.trim()) {
                $("#error_modal").html('<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>Bitte füllen Sie alle Felder aus!</div>');
                return;
            }

            //Ajax Request zum Senden der Benachrichtigung
            $.ajax({
                url: 'sendNotification',
                type: "post",
                data: 'notification_title=' + notification_title + '&notification_body=' + notification_body + '&bill_id=' + b_id,
                success: function (data) {
                    //versteckt Modal und zeigt Erfolgsmeldung an
                    $("#send_notification_popup_supplier").modal('hide').data('bs.modal', null);
                    $("#success").html('<div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert">&times;</a>Ihre Benachrichtigung wurde erfolgreich an die Buchhaltung versendet!</div>');

                    location.reload();
                    //versteckt den Benachrichtigung Senden Button und zeigt stattdessen den Benachrichtigung anzeigen Button an
                    //$('#open_notification_modal').remove();
                   // $("#show").html('<a class="btn btn-warning btn-sm toshow data-placement="top" title="Benachrichtigung anzeigen"><span class="glyphicon glyphicon-align-justify"></span></a>');
                   // $(document).on("click", "#show" , function() {
                    //    fillmodalNoti(b_id);
                  //  });

                }

            });
        });
    });

});
//------------------------------------------------------------------------
function getAllBills() {
    //fragt den Benutzer ob er die Rechnung wirklich löschen will
    var dialog = confirm("Wollen Sie alle Rechnungen holen? Beachten Sie, dass nur Rechnungen geholt werden, die keine Benachrichtigung enthalten!");
    //falls dieser die Abfrage bestätigt wird die Methode ausgeführt, dass die Rechnung gelöscht wird
    if (dialog == true) {
        window.location.href = "getAllBills";
    }
}