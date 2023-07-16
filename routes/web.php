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
Route::get('/contact', [SiteController::class, 'getContact'])->name('user.contact');
Route::get('/features', [SiteController::class, 'getFeatures'])->name('user.features');
Route::get('/blog', [SiteController::class, 'getBlog'])->name('user.blog');
Route::get('/shop', [SiteController::class, 'getShop'])->name('user.shop');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');