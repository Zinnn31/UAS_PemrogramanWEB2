<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MatrikController;
use App\Http\Controllers\SPKController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('Dashboard',DashboardController::class);

Route::resource('Kriteria',KriteriaController::class);

Route::resource('Alternatif',AlternatifController::class);

Route::resource('Hitung',HitungController::class);

Route::resource('SPK',SPKController::class);
