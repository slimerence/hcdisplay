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

Route::get('/about-us', '\Smartbro\Controllers\CustomPageController@about');
Route::get('/term', '\Smartbro\Controllers\CustomPageController@term');
Route::get('/return', '\Smartbro\Controllers\CustomPageController@return');
Route::get('/.well-known/pki-validation/87BD1DBEB10ABFF450C4440EBABBB0D3.txt','\Smartbro\Controllers\CustomPageController@verify');

