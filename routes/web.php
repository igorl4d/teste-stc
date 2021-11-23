<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;


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

Route::any('/', [indexController::class, 'index'])->name('index');

Route::post("/acessar/{codigo}", [indexController::class, 'acessar'])->name('acessar');