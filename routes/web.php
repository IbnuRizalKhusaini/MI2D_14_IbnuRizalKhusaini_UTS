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
Route::get('/home', function () {
    return view('judul');
});
Route::get('/home/eiffel', function() {
    return view('eiffel');
});
Route::get('/home/tembok', function() {
    return view('tembok');
});
Route::get('/home/borobudur', function() {
    return view('borobudur');
});
Route::get('/home/colosseum', function() {
    return view('colosseum');
});
