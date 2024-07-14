<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('/Clientes',ClienteController::class);
Route::resource('/Productos',ProductoController::class);



