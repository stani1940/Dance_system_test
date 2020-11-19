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

Route::get('/', function () {
    return view('index');
});
Route::get('/arbiters','HomeController@showArbiters')->name('arbiters.list');

Route::get('/participants','HomeController@showDancers')->name('dancers.list');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile/{user}','ProfilesController@index')->name('profile');
Route::get('/profile/{profile}/edit', 'ProfilesController@edit')->name('profiles.edit');
Route::put('/profile/{profile}/edit', 'ProfilesController@update')->name('profiles.update');
Route::namespace('Admin')->prefix('admin')->name('admin.')
    ->group(function (){
    Route::resource('/admin/users','UsersController');
    Route::get('admin/users{user}','UsersController@create_rating')->middleware('role:arbiter');
    Route::post('admin/users{user}', 'UsersController@rating')->name('add.rating');//->middleware('role:arbiter');

    });

Route::get('/about','AboutController@showAbout')->name('about');

