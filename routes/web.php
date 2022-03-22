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
Route::group(['middleware' => ['auth']], function(){
Route::get('/past', 'PastController@index');
Route::get('/', 'MenuController@index');
Route::get('/menus/{menu}', 'MenuController@show');
Route::get('/menus/create', 'MenuController@create');
Route::post('/menus', 'MenuController@store');
Route::get('/users/{user}', 'UsersController@show')->name('mypage');
Route::get('/users/{user}/edit', 'UsersController@userEdit');
Route::get('/menus/{menu}/edit', 'MenuController@edit');
Route::put('/menus/{menu}', 'MenuController@update');
Route::put('/users/{user}/edit', 'UsersController@update');
Route::delete('/menus/{menu}', 'MenuController@delete');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
