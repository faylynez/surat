<?php

use App\Http\Controllers\InboxController;
use App\Http\Controllers\SendController;
use App\Http\Controllers\DispositionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/send', function () {
//     return view('send.index');
// // });
// Route::get('/inbox', [InboxController::class, 'index']);
// Route::get('/inbox/{inbox}', [InboxController::class, 'show']);
// Route::get('/inbox/create', [InboxController::class, 'create']);
// Route::get('/inbox/{inbox}/edit', [InboxController::class, 'edit']);
// Route::post('/inbox', [InboxController::class, 'store']);
// Route::resource('/inbox',InboxController::class);
Route::get('/inbox', [InboxController::class,'index']);
Route::post('/inbox', [InboxController::class,'store']);
Route::get('/inbox/create', [InboxController::class,'create']);
Route::get('/inbox/{inbox}', [InboxController::class,'show']);
Route::get('/inbox/{inbox}/edit', [InboxController::class,'edit']);
Route::put('/inbox/{inbox}', [InboxController::class,'update']);
Route::delete('/inbox/{inbox}', [InboxController::class,'destroy']);

Route::get('/send', [SendController::class,'index']);
Route::post('/send', [SendController::class,'store']);
Route::get('/send/create', [SendController::class,'create']);
Route::get('/send/{send}', [SendController::class,'show']);
Route::get('/send/{send}/edit', [SendController::class,'edit']);
Route::put('/send/{send}', [SendController::class,'update']);
Route::delete('/send/{send}', [SendController::class,'destroy']);

Route::get('/dispo', [DispositionController::class,'index']);
Route::post('/dispo', [DispositionController::class,'store']);
Route::get('/dispo/create', [DispositionController::class,'create']);
Route::get('/dispo/{disposition}', [DispositionController::class,'show']);
Route::get('/dispo/{disposition}/edit', [DispositionController::class,'edit']);
Route::put('/dispo/{disposition}', [DispositionController::class,'update']);
Route::delete('/dispo/{disposition}', [DispositionController::class,'destroy']);

Route::resource('/dispo',DispositionController::class)->middleware('auth');
Route::resource('/user',UserController::class)->middleware('auth');
Route::resource('/send',SendController::class)->middleware('auth');
Route::resource('/inbox',InboxController::class)->middleware('auth');

Route::get('/',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/',[LoginController::class,'login'])->middleware('guest');
Route::get('/logout',[LoginController::class,'logout'])->middleware('auth');

Route::get('/home',[HomeController::class,'index'])->middleware('auth');
Route::get('/reportinbox',[HomeController::class,'inbox'])->middleware('auth');
Route::get('/reportsend',[HomeController::class,'send'])->middleware('auth');
Route::get('/reportdispo',[HomeController::class,'dispo'])->middleware('auth');
Route::get('/reportuser',[HomeController::class,'user'])->middleware('auth');

Route::get('/profile',[UserController::class,'profile'])->middleware('auth');
Route::post('/profile',[UserController::class,'editprofile'])->middleware('auth');