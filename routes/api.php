<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

Route::get('/acessar/{codigo}', [indexController::class, 'acessar_escola'])->name('acessar_escola'); 


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
