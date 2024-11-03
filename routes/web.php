<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/login', [LoginController::class, 'halamanLogin']);
route::get('/register', [RegisterController::class, 'halamanRegister']);
