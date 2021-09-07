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

Route::get('/', function (){
    echo "Selamat Datang";
});

Route::get('about', function (){
    echo "[2031710121] Raden Dimas Erlangga";
});

Route::get('articles/{id}', function ($id){
    echo "Halaman artikel dengan id ".$id;
});

