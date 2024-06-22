<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('layouts.welcome');
});

Route::get('loginPage',[AuthController::class , 'loginPage'])->name('auth#loginPage');
Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    // Route::get('/dashboard', function () {return view('Admin.layout.master');})->name('dashboard');
   Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');

});
