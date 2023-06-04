<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LatihanController::class, 'show']);
//create
Route::post('/', [LatihanController::class, 'create']);
//delete
Route::get('/latihan/{id}', [LatihanController::class, 'delete']);

Route::post('/latihan/{id}/edit', [LatihanController::class, 'update_form']);

Route::get('/login', [LoginController::class, 'authenticate']);