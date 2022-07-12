<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;

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

Route::get('/', 'App\Http\Controllers\SmsController@compose');
Route::post('send/sms', 'App\Http\Controllers\SmsController@sendSMS')->name('send.sms');
Route::get('sms/response','App\Http\Controllers\SmsController@smsResponse')->name('sms.response');



