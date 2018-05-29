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



Route::get('/', 'HomeController@index');

Route::get('/verifyemail/{token}', 'cadastroController@verify');

//Only on development
Route::get('/html/{id}', function ($id) {
    return view('html.'.$id);
});

Route::group(['prefix' => 'cadastro'], function(){

	Route::get('/', 'cadastroController@view')->name('cadastro.view');

	Route::post('store', 'cadastroController@store')->name('cadastro.store');	

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
