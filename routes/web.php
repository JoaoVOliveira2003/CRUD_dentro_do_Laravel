<?php

use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CarroController;

Route::resource('marcas', MarcaController::class);
Route::resource('carros', CarroController::class);
