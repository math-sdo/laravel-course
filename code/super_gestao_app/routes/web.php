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
|aaaaaaaa
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre-nos', function () {
    return 'Sobre n�s!';
});

Route::get('/contato', function () {
    return 'Contato';
});