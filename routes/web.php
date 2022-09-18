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

// Admin
Route::get('/admin/{pengguna}/show', [App\Http\Controllers\PenggunaController::class, 'show'])->name('admin.show');
Route::get('/admin/dashboard', [App\Http\Controllers\PenggunaController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/pengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('pengguna.index');
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
Route::get('/supervisor/create-pengguna', [App\Http\Controllers\SupervisorController::class, 'create'])->name('supervisor.create');
Route::get('/supervisor/dashboard', [App\Http\Controllers\SupervisorController::class, 'dashboard'])->name('supervisor.dashboard');

//barang
Route::resource('barang',BarangController::class);
//size
Route::resource('size',SizeController::class);
//recycle
Route::resource('data_recycle',RecycleController::class);

Route::get('/recycle/laporan-belum-potong', [App\Http\Controllers\RecycleController::class, 'laporanBelumPotong'])->name('recycle.laporan-belum-potong');
Route::get('/recycle/laporan-tunggu-buffing', [App\Http\Controllers\RecycleController::class, 'laporanTungguBuffing'])->name('recycle.laporan-tunggu-buffing');
Route::get('/recycle/laporan-siap-pouring', [App\Http\Controllers\RecycleController::class, 'laporanSiapPouring'])->name('recycle.laporan-siap-pouring');

//laporan
Route::get('/laporan/laporan-belum-potong', [App\Http\Controllers\LaporanController::class, 'laporanBelumPotong'])->name('laporan.belum-potong');
Route::get('/laporan/laporan-pinjaman', [App\Http\Controllers\LaporanController::class, 'laporanTungguBuffing'])->name('laporan.tunggu-buffing');
Route::get('/laporan/laporan-simpanan', [App\Http\Controllers\LaporanController::class, 'laporanSiapPouring'])->name('laporan.siap-pouring');
// Route::get('/laporan/tampil-laporan', [App\Http\Controllers\LaporanController::class, 'showLaporan'])->name('laporan.tampil-laporan');
Route::post('/laporan/tampil-laporan', [App\Http\Controllers\LaporanController::class, 'showLaporan'])->name('laporan.tampil-laporan');




Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



Route::resource('sisw',SiswaControllers::class);
