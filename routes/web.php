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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/todo','TodoController@index');

Route::post('/todoAdd','TodoController@store');

Route::get('/todo/{date}','TodoController@show');

Route::get('/todo/{date}/#','TodoController@check');

Route::delete('/todo/{id}', function ($id) {
    \App\Todo::findOrFail($id)->delete();
     return back();

});
