<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('registration','WelcomeController@registration');

Route::resource('customer','CustomerController');

Route::get('account_details/{account_no}','AccountController@accountDetails');

Route::resource('account','AccountController');

Route::resource('transaction','TransactionController');

Route::get('transactions/{account_no}','TransactionController@accountTransactions');

Route::get('fund_transfert','TransactionController@fund_transfert');

Route::get('checkAccountInfos','TransactionController@checkAccountInfos');

Route::resource('operation','OperationController');

Route::get('operation_proceed','OperationController@operation_proceed');

Route::get('operations/{account_no}','OperationController@accountOperations');

Route::resource('tac','TACController');

//Route::get('customer/details','CustomerController@details');

