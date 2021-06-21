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
Route::get('/','MyController@index');
Route::view('/HomePage','HomePage');
Route::view('/ViewCustomers','ViewCustomers');
Route::view('/TransferMoney','TransferMoney');
Route::view('/ViewTransactionHistory','ViewTransactionHistory');
Route::get('GetTransactionHistoryData/','MyController@GetTransactionHistoryData');
Route::get('GetCurrentBalByCusId/{CusId}','MyController@GetCurrentBalByCusId');
Route::post('/ShowTransaction','MyController@SaveTransaction');
Route::get('ShowCustomers/','MyController@ShowCustomers');