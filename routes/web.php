<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;


    Route::get('/', function () {
        return view('layouts.welcome');
    });

    Route::get('loginPage',[AuthController::class , 'loginPage'])->name('auth#loginPage');
    Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('dashboard',[ServiceController::class,'dashboardPage'])->name('admin#dashboard');

    Route::prefix('category')->group(function()
    {
        Route::get('list',[CategoryController::class,'list'])->name('category#list');
        Route::get('create/page',[CategoryController::class,'createPage'])->name('category#createPage');
        Route::post('create',[CategoryController::class,'create'])->name('category#create');
        Route::get('edit/{id}',[CategoryController::class,'edit'])->name('category#edit');
        Route::post('update/{id}',[CategoryController::class,'update'])->name('category#update');
        Route::get('delete/{id}',[CategoryController::class,'delete'])->name('category#delete');
    });

    // Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
    // Route::get('/dashboard', function () {return view('Admin.layout.master');})->name('dashboard');
    Route::prefix('service')->group(function(){
        Route::get('list',[ServiceController::class,'list'])->name('service#list');
        Route::get('create/page',[ServiceController::class,'createPage'])->name('service#createPage');
        Route::post('create',[ServiceController::class,'create'])->name('service#create');
        Route::get('edit/{id}',[ServiceController::class,'edit'])->name('service#edit');
        Route::post('update',[ServiceController::class,'update'])->name('service#update');
        Route::get('delete/{id}',[ServiceController::class,'delete'])->name('service#delete');
    });

    Route::prefix('customer')->group(function(){
       Route::get('list',[CustomerController::class,'list'])->name('customer#list');
    });

    Route::prefix('gallery')->group(function(){
        Route::get('list',[GalleryController::class,'list'])->name('gallery#list');
        Route::get('create/page',[GalleryController::class,'createPage'])->name('gallery#createPage');
        Route::post('create',[GalleryController::class,'create'])->name('gallery#create');
        Route::get('edit/{id}',[GalleryController::class,'edit'])->name('gallery#edit');
        Route::post('update',[GalleryController::class,'update'])->name('gallery#update');
        Route::get('delete/{id}',[GalleryController::class,'delete'])->name('gallery#delete');
     });

     Route::prefix('user')->group(function(){
        Route::get('home',[UserController::class,'homePage'])->name('user#homePage');
        Route::get('aboutUs',[UserController::class,'aboutUsPage'])->name('user#aboutUsPage');
        Route::get('gallery',[UserController::class,'galleryPage'])->name('user#galleryPage');
        Route::get('service',[UserController::class,'servicePage'])->name('user#servicePage');
        Route::get('contact',[UserController::class,'contactUsPage'])->name('user#contactUsPage');

     });

});
