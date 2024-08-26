<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SakitController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DispenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HariLiburController;
use App\Http\Controllers\IzinabsenController;
use App\Http\Controllers\IzinsakitController;
use App\Http\Controllers\IzindispenController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\KonfigurasiController;
use App\Models\Siswa;

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

Route::middleware(['guest:siswa'])->group(function(){
    Route::get('/', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/proseslogin',[AuthController::class,'proseslogin']);
});

Route::middleware(['guest:user'])->group(function(){
    Route::get('/admin', function () {
        return view('auth.loginadmin');
    })->name('loginadmin');
    Route::post('/prosesloginadmin',[AuthController::class,'prosesloginadmin']);
});


Route::middleware(['auth:siswa'])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/proseslogout',[AuthController::class,'proseslogout']);

    Route::get('/2y$10$3VyqbLw48PWw4Oq7cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a',[DashboardController::class,'calon1']);
    Route::get('/2y$10$3VyqbLw48PWw4Oq8cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a',[DashboardController::class,'calon2']);

});

Route::middleware(['auth:user'])->group(function(){
    Route::get('/admin/dashboardadmin',[DashboardController::class,'dashboardadmin']);
    Route::get('/admin/proseslogoutadmin', [AuthController::class, 'proseslogoutadmin']);

});
