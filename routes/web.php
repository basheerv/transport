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

// Route::get('/', function () {
//     return view('pages.home');
// });

 // Auth::routes();

Route::get('/','HomeController@index')->name('login');
Auth::routes([
    'register' => false, // Registration Routes...
    //'reset' => false, // Password Reset Routes...
    //'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('transportReg', 'TransportController@index')->name('transportReg.index');
Route::get('transportReg/create', 'TransportController@create')->name('transportReg.create');
Route::post('transportReg/store', 'TransportController@store')->name('transportReg.store');
Route::get('transportReg/{id}/edit', 'TransportController@edit')->name('transportReg.edit');
Route::post('transportReg/{id}/update', 'TransportController@update')->name('transportReg.update');
Route::delete('transportReg/{id}/destroy', 'TransportController@destroy')->name('transportReg.destroy');

Route::get('agreement', 'AgreementController@index')->name('agreement.index');
Route::get('agreement/create', 'AgreementController@create')->name('agreement.create');
Route::post('agreement/store', 'AgreementController@store')->name('agreement.store');
// Route::get('agreement/{id}/edit', 'AgreementController@edit')->name('agreement.edit');
// Route::post('agreement/{id}/update', 'AgreementController@update')->name('agreement.update');
// Route::delete('agreement/{id}/destroy', 'AgreementController@destroy')->name('agreement.destroy');


