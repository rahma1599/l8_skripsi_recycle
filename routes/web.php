<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaControllers;
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

/* Route::get('/dashboard', function(){
    return view('layouts.template');
}); */

Auth::routes();

// Route::get('/admin/laporan', [App\Http\Controllers\LaporanController::class, 'showLaporanAll'])->name('admin.laporan_all');
// Route::get('/admin/laporan_recycle_b', [App\Http\Controllers\LaporanController::class, 'showLapRecycleB'])->name('admin.laporan_recycle_b');
// Route::get('/admin/laporan_recycle_f', [App\Http\Controllers\LaporanController::class, 'showLapRecycleF'])->name('admin.laporan_recycle_f');
// Route::get('/admin/laporan_recycle_s', [App\Http\Controllers\LaporanController::class, 'showLapRecycleS'])->name('admin.laporan_recycle_s');

Route::get('/admin/index', [App\Http\Controllers\LaporanController::class, 'index'])->name('admin.index');

Route::get('/dashboard', function(){
    return view('layouts.template');
});

Route::get('/crud/create', function(){
    return view('crud.create');
});

Route::get('/crud/index', function (){
    return view('crud.index');
});

Route::get('/admin/create', function(){
    return view('admin.create');
});

Route::get('/admin/index', function (){
    return view('admin.index');
});

Route::get('/admin/dashboard', function (){
    return view('admin.dashboard');
});

Route::get('/admin/edit', function (){
    return view('admin.edit');
});

Route::get('/admin/show', function (){
    return view('admin.show');
});

Route::get('/supervisor/dashboard', function (){
    return view('supervisor.dashboard');
});

Route::get('/supervisor/lihatlaporan', function (){
    return view('supervisor.lihatlaporan');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('sisw',SiswaControllers::class);
