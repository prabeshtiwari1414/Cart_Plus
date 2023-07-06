<?php

use App\Http\Controllers\SiteController;
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


Route::get('/template', [SiteController::class, 'getTemplate'])->name('getTemplate');
Route::get('/', [SiteController::class, 'getHome'])->name('user.home');
Route::get('/about', [SiteController::class, 'getAbout'])->name('user.about');
Route::get('/galleries', [SiteController::class, 'getGallery'])->name('user.gallery');
