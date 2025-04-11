<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/registrasi', [AuthController::class, 'tampilregistrasi'])->name('registrasi.tampil');
route::post('/registrasi/submit', [AuthController::class, 'submitregistrasi'])->name('registrasi.submit');


route::get('/login', [AuthController::class, 'tampillogin'])->name('login.tampil');
route::post('/login/submit', [AuthController::class, 'submitlogin'])->name('login.submit');