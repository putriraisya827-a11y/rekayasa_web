<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use app\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/halo', function(){
    return 'Hallo Dunia Laravel';
});

Route::get('/profil', function () {
    return '<h1>Profil Mahasiswa</h1>
            <p>Selamat Datang</p>';
});         

Route::get('/home', function () {
    return view('home');
});