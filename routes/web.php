<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;


    // Route::get('/', function () {
    //     return view('layouts.welcome');
    // });

    //guest route start
    Route::middleware(['isGuest'])->group(function(){
        Route::get('/',[GuestController::class,'homePage'])->name('guest#homePage');
        Route::get('/about',[GuestController::class,'aboutPage'])->name('guest#aboutPage');
        Route::get('/gallery',[GuestController::class,'galleryPage'])->name('guest#galleryPage');
        Route::get('/service',[GuestController::class,'servicePage'])->name('guest#servicePage');
        Route::get('/contact',[GuestController::class,'contactPage'])->name('guest#contactPage');
        Route::get('/404Page',[GuestController::class,'notFoundPage'])->name('guest#notFoundPage');
    });

    //guest route end

    Route::get('loginPage',[AuthController::class , 'loginPage'])->name('auth#loginPage');
    Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');


    Route::get('dashboard',[ServiceController::class,'dashboardPage'])->name('admin#dashboard');
    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
        //check admin or user
        Route::middleware(['isAdmin'])->group(function(){

        Route::prefix('admin')->group(function(){
            Route::get('profile',[AdminController::class,'profilePage'])->name('admin#profilePage');
            Route::get('profile/edit',[AdminController::class,'editProfilePage'])->name('admin#editProfilePage');
            Route::post('update/{id}',[AdminController::class,'update'])->name('admin#profileUpdate');
            Route::get('password/change',[AdminController::class,'changePasswordPage'])->name('admin#changePasswordPage');
            Route::post('password/change',[AdminController::class,'changePassword'])->name('admin#changePassword');

        });

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
            Route::get('change/{id}',[CustomerController::class,'changeRolePage'])->name('customer#changeRolePage');
            Route::post('change/{id}',[CustomerController::class,'changeRole'])->name('customer#changeRole');
            Route::get('block/{id}',[CustomerController::class,'block'])->name('customer#block');
         });

         Route::prefix('gallery')->group(function(){
             Route::get('list',[GalleryController::class,'list'])->name('gallery#list');
             Route::get('create/page',[GalleryController::class,'createPage'])->name('gallery#createPage');
             Route::post('create',[GalleryController::class,'create'])->name('gallery#create');
             Route::get('edit/{id}',[GalleryController::class,'edit'])->name('gallery#edit');
             Route::post('update',[GalleryController::class,'update'])->name('gallery#update');
             Route::get('delete/{id}',[GalleryController::class,'delete'])->name('gallery#delete');
          });

        Route::prefix('booking')->group(function(){
            Route::get('list',[BookingController::class,'list'])->name('booking#list');
            Route::get('feedBack',[BookingController::class,'feedbackPage'])->name('feedback#list');
            Route::post('booking/accept/{id}',[BookingController::class,'accept'])->name('booking#accept');
            Route::post('booking/reject/{id}',[BookingController::class,'reject'])->name('booking#reject');
        });


    });

     //user route start
    Route::middleware(['isUser'])->prefix('user')->group(function(){
        Route::get('home',[UserController::class,'homePage'])->name('user#homePage');
        Route::get('aboutUs',[UserController::class,'aboutUsPage'])->name('user#aboutUsPage');
        Route::get('gallery',[UserController::class,'galleryPage'])->name('user#galleryPage');
        Route::get('service',[UserController::class,'servicePage'])->name('user#servicePage');
        Route::get('contact',[UserController::class,'contactUsPage'])->name('user#contactUsPage');
        Route::get('detail{id}',[UserController::class,'detail'])->name('user#detailPage');
        Route::get('booking/form',[UserController::class,'bookingForm'])->name('user#bookingForm');
        Route::post('booking/create',[UserController::class,'create'])->name('user#bookingCreate');
        Route::get('message',[UserController::class,'message'])->name('user#message');
        Route::get('profile',[UserController::class,'profilePage'])->name('user#profilePage');
        Route::get('profile/edit',[UserController::class,'editProfilePage'])->name('user#editProfilePage');
        Route::post('update/{id}',[UserController::class,'update'])->name('user#profileUpdate');
        Route::get('password/change',[UserController::class,'changePasswordPage'])->name('user#changePasswordPage');
        Route::post('password/change',[UserController::class,'changePassword'])->name('user#changePassword');
        Route::post('contact',[UserController::class,'contact'])->name('user#contact');

    });
     //user route end

});
