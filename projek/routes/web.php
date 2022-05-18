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

Route::get('/login', function () {
    return view('login');
});

Route::get('/halamanawal', function () {
    return view('halamanawal');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/entergame', function () {
    return view('entergame');
});