<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PrepageController;
use App\Http\Controllers\RegistController;

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

// Route::get('/home', function () {
//     return view('dashboard');
// });

// Route::get('/tambahdata', function () {
//     return view('tambahdata');
// });

Route::resource('/tambahdata', PhotoController::class);
Auth::routes();

Route::get('/', [App\Http\Controllers\PrepageController::class, 'prepage'])->name('prepage');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/edit-data', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');