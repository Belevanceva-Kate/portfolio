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

Route::group(['middleware' => 'HtmlMinify'], function() {
    Route::get('/', 'IndexController@display');
    Route::get('/projects/{name}', 'ProjectController@display');
    Route::get('locale/{locale}', 'LocalizationController@update_locale');
    Route::get('invoices/download', 'PDFController@download');
});
