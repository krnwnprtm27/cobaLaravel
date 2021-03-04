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

Route::get('/cobalaravel/public/about', function () {
    return view('about');
});

Route::get('/cobalaravel/public/loopingfor', function () {
    return view('loopingfor');
});

Route::get('/cobalaravel/public/mahasiswa', function () {
    $nama = 'Kurniawan Dwi Pratama';
    $nim = '185150701111022';
    return view('mahasiswa', ['nama' => $nama, 'nim' => $nim]);
});
