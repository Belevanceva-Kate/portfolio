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
    Route::prefix('/')->group(function() {

        Route::get('/', 'IndexController@display');

        Route::prefix('projects')->group(function() {
            Route::get('{name}', 'ProjectController@display');
            Route::get('locale/{locale}', 'LocalizationController@update_locale');
        });
    });

    Route::get('locale/{locale}', 'LocalizationController@update_locale');
//    Route::get('pdf', 'PDFController@download');
});
