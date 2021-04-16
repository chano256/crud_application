<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

//POST, DELETE, PATCH, DELETE

//Product Resource
Route::get('/products', 'ProductController@show');
Route::resource('/newproduct', 'ProductController');

//Customer Resource
Route::get('/customers', 'CustomerController@show');
Route::resource('/newcustomer', 'CustomerController');

//Invoice Resource
Route::get('/invoices', 'InvoiceController@show');
Route::resource('/newinvoice', 'InvoiceController');
