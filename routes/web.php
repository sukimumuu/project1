<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class,'index'])->name('index');

Route::get('/login',[PagesController::class,'login'])->name('login');
Route::post('/login-send',[LoginController::class,'export'])->name('send.login');

Route::get('/peduliaalam',[PagesController::class,'landing'])->name('landing');
