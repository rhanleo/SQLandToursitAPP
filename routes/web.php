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

Auth::routes();
#ROUTE FOR JAPAN API's
Route::get('/', 'mainController@index')->name('main');
Route::get('/{cityname} ', 'mainController@venue')->name('venue');
Route::get('venue/{id} ', 'mainController@getVenueDetails')->name('venue-details');

#ROUTE FOR SQL Test
Route::get('/sql/sql-test-1', 'sqlTestController@firstTest')->name('sql-first');
Route::get('/sql/sql-test-2', 'sqlTestController@secondTest')->name('sql-secont');
// Route::middleware('auth:web')->get('/dashboard', 'dashboardController@dashboard')->name('dashboard');




