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
    return view('welcome');
});

Route::get('/guard', 'GuardsController@dashboard');
Route::get('/guard/userDetail', 'GuardsController@userDetail');
Route::get('/guard/forms', 'GuardsController@forms');
Route::get('/guard/tables', 'GuardsController@tables');
Route::get('/guard/notifications', 'GuardsController@notifications');


Route::get('/tco', 'TCOsController@dashboard');
Route::get('/tco/crud', 'TCOsController@crud');
Route::get('/tco/log', 'TCOsController@log');
Route::get('/tco/userDetail', 'TCOsController@userDetail');


Route::get('/admin', 'adminsController@dashboard');
Route::get('/admin/userDetail', 'adminsController@userDetail');
Route::get('/admin/forms', 'adminsController@forms');
Route::get('/admin/notifications', 'adminsController@notifications');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/forms','HomeController@forms')->name('forms');

Route::get('/tables','HomeController@tables')->name('tables');

Route::get('/notifications','HomeController@notifications')->name('notifications');

Route::get('/crud','HomeController@crud')->name('crud');

Route::get('/log','HomeController@log')->name('log');

Route::get('/userDetail','HomeController@userDetail')->name('userDetail');

Route::get('/registerNewUser','HomeController@registerNewUser');

