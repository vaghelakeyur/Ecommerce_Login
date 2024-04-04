<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[HomeController::class,'userpage'])->name('userpage');

Route::get('register_view',[HomeController::class,'register_view']);

Route::post('register_confirm',[HomeController::class,'register_confirm']);

Route::get('login_view',[AdminController::class,'login_view'])->name('login_view');

Route::post('login_confirm',[AdminController::class,'login_confirm']);

Route::get('homepage',[AdminController::class,'homepage'])->name('homepage');


Route::get('logout_confirm',[AdminController::class,'logout_confirm'])->name('logout_confirm');