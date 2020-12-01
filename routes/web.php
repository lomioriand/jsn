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

Route::get('/', 'BankController@welcome');

Route::post('/', 'BankController@checkLogin');

Route::get('/register', 'BankController@register');

Route::get('/home/{id}', 'BankController@home');

Route::get('/bills/{id}', 'BankController@bills');

Route::get('/accounts/{id}', 'BankController@accounts');

Route::get('/references/{id}', 'BankController@references');

Route::get('/contacts/{id}', 'BankController@contacts');

Route::get('/profile/{id}', 'BankController@profile');

Route::get('/promotions/{id}', 'BankController@promotions');

Route::get('/logout', 'BankController@logout');