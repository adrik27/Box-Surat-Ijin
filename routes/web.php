<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', [UserController::class, 'login']);
Route::post('/', [UserController::class, 'ProsesLogin']);
Route::get('/registrasi', [UserController::class, 'registrasi']);
Route::post('/registrasi', [UserController::class, 'ProsesRegistrasi']);
Route::post('/logout', [UserController::class, 'logout']);
Route::resource('/Dashboard/Admin', DashboardController::class);
