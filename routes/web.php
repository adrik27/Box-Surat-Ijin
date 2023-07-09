<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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


Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'ProsesLogin']);
Route::resource('/Dashboard/Anggota', UserController::class);
Route::post('/Dashboard/Anggota/{User:id}/Destroy ', [UserController::class, 'hapus']);
Route::get('/Dashboard/Anggota/{User:id}/Detail', [UserController::class, 'detail']);
Route::get('/registrasi', [UserController::class, 'registrasi']);
Route::post('/registrasi', [UserController::class, 'ProsesRegistrasi']);
Route::post('/logout', [UserController::class, 'logout']);
Route::resource('/Dashboard/Admin', DashboardController::class);
Route::get('/Dashboard/Anggota/{User:id}/Edit', [UserController::class, 'edit']);
Route::post('/Dashboard/Anggota/{User:id}', [UserController::class, 'prosesedit']);
