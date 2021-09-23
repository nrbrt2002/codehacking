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
Route::resource('admin/users', 'usersController');

Auth::routes();
Route::get('/admin', function(){

  return view('admin.index');

});

Route::get('/home', 'HomeController@index')->name('home');
