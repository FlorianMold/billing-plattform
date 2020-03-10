<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* liefert die "KEINE Berechtigung Seite zurück*/
Route::get('errors', function () {
    return view('errors.403');
});

Route::get('pdfs/{filename}', function ($filename)
{
    $path = '../storage/app/pdfs/'. $filename;

    if (\Illuminate\Support\Facades\File::exists($path))
    {
        if ((\Illuminate\Support\Facades\Session::has('supplier')) || (\Illuminate\Support\Facades\Session::has('accounter')) ||(\Illuminate\Support\Facades\Session::has('accounterAdmin'))) {

            $file = \Illuminate\Support\Facades\File::get($path);
            $response = \Illuminate\Support\Facades\Response::make($file, 200);
            $response->header('Content-Type', 'application/pdf');

            return $response;
        }
        else {
            return view('errors.403');
        }
    }
    else {
        return view('errors.404');
    }



});

/* Login Lieferant */
Route::get('/', 'LoginController@getLogin');
Route::post('loginSupplier', 'LoginController@loginSupplier');
Route::post('loginAccounting', 'LoginController@loginAccounting');

/* Logout */
Route::get('logout', 'LoginController@logout');

/* Lieferant Registrieren */
Route::post('registerSupplier', 'LoginController@registerSupplier');

/* Passwort vergessen */
Route::post('resetPasswordMail', 'LoginController@resetPasswordMail');
Route::get('forgotPassword/{id}', 'LoginController@passwordForget');
Route::post('resetPassword/{id}', 'LoginController@resetPassword');

/* Passwort ändern */
Route::get('changePassword/{id}', 'OtherController@showPasswordChange');
Route::post('changePassword/{id}', 'OtherController@changePassword');

//Lieferant
Route::get('supplier', 'SupplierController@showSupplierPage');
Route::post('supplier/uploadBill', 'SupplierController@uploadBill');
Route::post('sendNotification', 'SupplierController@setNotification');

//Buchhaltung
Route::get('accounting', 'AccountingController@showAccountingPage');
Route::get('deleteBill/{id}/{supplierid}/{suppliername}', 'AccountingController@deleteBill');
Route::get('sendbill/{id}', 'AccountingController@sendbill');
Route::get('getAllBills', 'AccountingController@getAllBills');
Route::get('getModalInfo/{id}', 'AccountingController@getModalInfo');


// BACKEND -----------------------------------------------------------------------------------------------
// anzeigen
Route::get('backend', 'AdminBackendController@getBackend');

// Supplier
Route::get('backend/supplier', 'AdminBackendController@getSupplier');
Route::get('backend/acceptSupplier/{id}', 'AdminBackendController@acceptSupplier');
Route::get('backend/lockSupplier/{id}', 'AdminBackendController@lockSupplier');
Route::get('backend/deleteSupplier/{id}', 'AdminBackendController@deleteSupplier');

// Accounter
Route::get('backend/accounter', 'AdminBackendController@getAccounter');
Route::get('backend/accounter/table', 'AdminBackendController@getAccounterTable');
Route::post('backend/accounter/add', 'AdminBackendController@addAccounter');
Route::get('backend/accounter/accept/{id}', 'AdminBackendController@acceptAccounter');
Route::get('backend/accounter/delete/{id}', 'AdminBackendController@deleteAccounter');
Route::get('backend/accounter/lock/{id}', 'AdminBackendController@lockAccounter');

// Passwortkriterien
Route::get('backend/passwordcriteria', 'AdminBackendController@passwordcriteria');
Route::post('backend/setPwInterval', 'AdminBackendController@setNewInterval');
Route::post('backend/setPwCriteria', 'AdminBackendController@setNewCriteria');

// Währung
Route::get('backend/currency', 'AdminBackendController@currency');
Route::post('backend/currency/update', 'AdminBackendController@updateCurrency');
Route::post('backend/currency/add', 'AdminBackendController@addCurrency');
Route::get('backend/currency/table', 'AdminBackendController@currencyTable');

// Firmen
Route::get('backend/location', 'AdminBackendController@location');
Route::post('backend/location/update', 'AdminBackendController@updateLocation');
Route::post('backend/location/add', 'AdminBackendController@addLocation');
Route::get('backend/location/table', 'AdminBackendController@locationTable');

// Email
Route::get('backend/email', 'AdminBackendController@email');
Route::post('backend/email/update/{type}', 'AdminBackendController@emailUpdate');

// Rechnungstypen
Route::get('backend/billtype', 'AdminBackendController@billtype');
Route::post('backend/billtype/update', 'AdminBackendController@updateBilltype');
//Route::post('backend/billtype/delete/{id}', 'AdminBackendController@deleteBilltype');
Route::post('backend/billtype/add', 'AdminBackendController@addBilltype');
Route::get('backend/billtype/list', 'AdminBackendController@listBilltype');
