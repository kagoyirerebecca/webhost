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
Route::get('user/home', 'HomeController@userHome')->middleware('rights');
Route::get('clientsdomains/listings/{$user_id}','ClientsdomainsController@listings')->name('clientsdomains.listings'); 
Route::resource('clientsdomains','ClientsdomainsController');
Route::resource('domains','DomainsController');
Route::resource('hostings','HostingController');
Route::resource('packages','PackageController');
Route::resource('users','UsersController');
