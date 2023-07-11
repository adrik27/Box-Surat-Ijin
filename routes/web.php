<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\KategoriSuratController;
use App\Http\Controllers\SuratController;
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

// LOGIN
Route::get('/', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'ProsesLogin'])->middleware('guest');

// ANGGOTA 
Route::resource('/Dashboard/User', UserController::class)->middleware('admin');
// Route::post('/Dashboard/Anggota/{User:id}/Destroy ', [UserController::class, 'hapus']);
// Route::get('/Dashboard/Anggota/{User:id}/Detail', [UserController::class, 'detail']);
// Route::get('/Dashboard/Anggota/{User:id}/Edit', [UserController::class, 'edit']);
// Route::post('/Dashboard/Anggota/{User:id}', [UserController::class, 'prosesedit']);

// REGISTRASI
Route::get('/registrasi', [UserController::class, 'registrasi'])->middleware('guest');
Route::post('/registrasi', [UserController::class, 'ProsesRegistrasi'])->middleware('guest');
// LOGOUT
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// DASHBOARD
Route::resource('/Dashboard/Admin', DashboardController::class)->middleware('admin');
// DIVISI
Route::resource('/Dashboard/Divisi', DivisiController::class)->except('show')->middleware('admin');
// Kategori Box
Route::resource('/Dashboard/KategoriSurat', KategoriSuratController::class)->except('show')->middleware('admin');
// BoxKABAG
Route::get('/Dashboard/Kabag', [SuratController::class, 'tampilanKabagBox'])->middleware('kabag');
Route::post('/Dashboard/Kabag/{Surat:id}', [SuratController::class, 'prosesacc'])->middleware('kabag');
Route::post('/Dashboard/Kabag/{Surat:id}/Tolak', [SuratController::class, 'prosestolak'])->middleware('kabag');
// BoxHRD
Route::get('/Dashboard/HRD', [SuratController::class, 'tampilanHRD'])->middleware('hrd');
Route::post('/Dashboard/HRD/{Surat:id}', [SuratController::class, 'prosesaccHrd'])->middleware('hrd');
Route::post('/Dashboard/HRD/{Surat:id}/Tolak', [SuratController::class, 'prosestolakHrd'])->middleware('hrd');
// AllBox
Route::get('/Dashboard/AllBox', [SuratController::class, 'tampilanAllBox'])->middleware('admin');
// BoxPegawai
Route::resource('/Dashboard/Surat', SuratController::class)->middleware('pegawai');
