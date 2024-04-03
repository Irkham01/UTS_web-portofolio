<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingpages', function () {
    return view('landing-pages');
});

Route::get('/personalwebirkham', function () {
    return view('personalwebirkham');
});

Route::get('/nama-saya', function () {
    return view('nama-saya');
});