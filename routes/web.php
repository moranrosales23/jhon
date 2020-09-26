<?php

use App\Http\Controllers\ArchivoController;
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

Route::get('/index', [ArchivoController::class, 'index']);
Route::post('/registrar', [ArchivoController::class, 'store']);
Route::get('/archivos', [ArchivoController::class, 'show']);
Route::get('/listar', [ArchivoController::class, 'see']);
