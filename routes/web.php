<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class,'welcome'] )->name('welcome');
Route::get('/profile', [PublicController::class,'profile'] )->name('profile');
Route::get('/article/new', [PublicController::class,'articleNew'] )->name('articleNew');
Route::get('/article/index', [PublicController::class,'articleIndex'] )->name('articleIndex');



