<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Customer api
Route::post('/customer', 'ApiController@createCustomer');
Route::get('/customers', 'ApiController@showCustomers');
Route::get('/customer/{id}', 'ApiController@showCustomerById');
Route::put('/customerupdate/{id}', 'ApiController@updateCustomerById');
Route::delete('customerdelete/{id}', 'ApiController@deleteCustomerById');

//Product api
Route::post('/product', 'ApiController@createProduct');
Route::get('/products', 'ApiController@showProducts');
Route::get('/product/{id}', 'ApiController@showProductById');
Route::put('/productupdate/{id}', 'ApiController@updateProductById');
Route::delete('productdelete/{id}', 'ApiController@deleteProductById');

//Invoice api
Route::post('/invoice', 'ApiController@createInvoice');
Route::get('/invoices', 'ApiController@showInvoices');
Route::get('/invoice/{id}', 'ApiController@showInvoiceById');
Route::put('/invoiceupdate/{id}', 'ApiController@updateInvoiceById');
Route::delete('invoicedelete/{id}', 'ApiController@deleteInvoiceById');