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

Route::get('/ayau', function () {
    return "<h1>Ayaulym Akkulova</h1>";
})->name('ayau');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/week4', function () {
    return 'Ayaulym Akkulova 190103328 lab work number 4';
});