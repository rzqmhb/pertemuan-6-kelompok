<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('profile/{slug}', [ProfileController::class, 'show'])->name('profile')->middleware('auth');

Route::get('/pengalaman-kuliah', [PengalamanController::class, 'pengalaman'])->name('pengalaman')->middleware('auth');
