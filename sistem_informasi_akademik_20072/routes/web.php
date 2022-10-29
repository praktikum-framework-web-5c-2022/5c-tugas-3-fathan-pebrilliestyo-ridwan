<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

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

Route::get('/', [DashboardController::class,'index']);

Route::resources([
    'dsn' => DosenController::class,
    'mhs' => MahasiswaController::class,
    'mk' => MatakuliahController::class
]);

// Route::prefix("dosen")->namespace('dosen')->group(function(){
//     Route::get('/',[DosenController::class,'index'])->name('dosen.index');
//     Route::get('/create',[DosenController::class,'create'])->name('dosen.create');
//     Route::get('/store',[DosenController::class,'store'])->name('dosen.store');
//     Route::get('/edit',[DosenController::class,'edit'])->name('dosen.edit');
//     Route::get('/update',[DosenController::class,'update'])->name('dosen.update');
//     Route::get('/delete',[DosenController::class,'delete'])->name('dosen.delete');
// });

// Route::prefix("mahasiswa")->namespace('mahasiswa')->group(function(){
//     Route::get('/',[MahasiswaController::class,'index'])->name('mahasiswa.index');
//     Route::get('/create',[MahasiswaController::class,'create'])->name('mahasiswa.create');
//     Route::get('/store',[MahasiswaController::class,'store'])->name('mahasiswa.store');
//     Route::get('/edit',[MahasiswaController::class,'edit'])->name('mahasiswa.edit');
//     Route::get('/update',[MahasiswaController::class,'update'])->name('mahasiswa.update');
//     Route::get('/delete',[MahasiswaController::class,'delete'])->name('mahasiswa.delete');
// });

// Route::prefix("matakuliah")->namespace('matakuliah')->group(function(){
//     Route::get('/',[MatakuliahController::class,'index'])->name('matakuliah.index');
//     Route::get('/create',[MatakuliahController::class,'create'])->name('matakuliah.create');
//     Route::get('/store',[MatakuliahController::class,'store'])->name('matakuliah.store');
//     Route::get('/edit',[MatakuliahController::class,'edit'])->name('matakuliah.edit');
//     Route::get('/update',[MatakuliahController::class,'update'])->name('matakuliah.update');
//     Route::get('/delete',[MatakuliahController::class,'delete'])->name('matakuliah.delete');
// });


