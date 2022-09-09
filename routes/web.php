<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaControllers;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\RecycleController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('auth.login');
});

/* Route::get('/dashboard', function(){
    return view('layouts.template');
}); */

Auth::routes();

// Route::get('/admin/laporan', [App\Http\Controllers\LaporanController::class, 'showLaporanAll'])->name('admin.laporan_all');
// Route::get('/admin/laporan_recycle_b', [App\Http\Controllers\LaporanController::class, 'showLapRecycleB'])->name('admin.laporan_recycle_b');
// Route::get('/admin/laporan_recycle_f', [App\Http\Controllers\LaporanController::class, 'showLapRecycleF'])->name('admin.laporan_recycle_f');
// Route::get('/admin/laporan_recycle_s', [App\Http\Controllers\LaporanController::class, 'showLapRecycleS'])->name('admin.laporan_recycle_s');

// Admin
Route::get('/admin/{pengguna}/show', [App\Http\Controllers\PenggunaController::class, 'show'])->name('admin.show');
Route::get('/admin/dashboard', [App\Http\Controllers\PenggunaController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/list-pengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('pengguna.index');
Route::get('/admin/create-pengguna', [App\Http\Controllers\PenggunaController::class, 'create'])->name('pengguna.create');
// Pengguna
Route::post('/pengguna/store', [App\Http\Controllers\PenggunaController::class, 'store'])->name('pengguna.store');
Route::get('/pengguna/{pengguna}/edit', [App\Http\Controllers\PenggunaController::class, 'edit'])->name('pengguna.edit');
Route::match(['put', 'patch'],'/pengguna/{id}', [App\Http\Controllers\PenggunaController::class, 'update'])->name('pengguna.update');
Route::post('/pengguna/{id}', [App\Http\Controllers\PenggunaController::class, 'destroy'])->name('pengguna.destroy');
Route::get('/pengguna/{pengguna}', [App\Http\Controllers\PenggunaController::class, 'show'])->name('pengguna.show');
// supervisor
Route::get('/supervisor/{pengguna}/show', [App\Http\Controllers\SupervisorController::class, 'show'])->name('supervisor.show');
Route::get('/supervisor/index', [App\Http\Controllers\SupervisorController::class, 'index'])->name('supervisor.index');
Route::get('/supervisor/list-pengguna', [App\Http\Controllers\SupervisorController::class, 'index'])->name('supervisor.index');
Route::get('/supervisor/create-pengguna', [App\Http\Controllers\SupervisorController::class, 'create'])->name('supervisor.create');

//barang
Route::resource('barang',BarangController::class);
//size
Route::resource('size',SizeController::class);
//recycle
Route::resource('recycle',RecycleController::class);
Route::get('/admin/laporan-belum-potong', [App\Http\Controllers\RecycleController::class, 'laporanRecycle'])->name('admin.laporan-belum-potong');
Route::get('/admin/laporan-tunggu-buffing', [App\Http\Controllers\RecycleController::class, 'laporanRecycle'])->name('admin.laporan-tunggu-buffing');





Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



Route::resource('sisw',SiswaControllers::class);
