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


Route::get('/posts/', 'PostController@index');

Route::get('/posts/', 'PostController@create');

Route::get('/posts/', 'PostController@delete');

Route::get('/posts/', 'PostController@update');

Route::get('/posts/', 'HomeController@aboutus');


Route::get('/products/', 'ProductController@index');

Route::get('/products/', 'ProductController@create');

Route::get('/products/', 'ProductController@update');


Route::get('/question/', 'FaqController@question');

Route::get('/question/', 'FaqController@answer');


Route::get('/user/', 'UserController@user');



