<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\MessageController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\hPageController;
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
Route::namespace('Front')->group(function(){
    Route::get('/',[HomepageController::class,'index'])->name('front.homepage');
    Route::get('/cat/{id}',[CourseController::class,'cat'])->name('front.cat');
    Route::get('/cat/{id}/course/{c_id}',[CourseController::class,'show'])->name('front.show');
    Route::get('/contact',[ContactController::class,'index'])->name('front.contact');
    
    Route::get('/message/newsletter',[MessageController::class,'newsletter'])->name('front.message.newsletter');
});

 