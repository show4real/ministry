<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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



Route::group([], function(){
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home');
    });
    // Route::controller(ContactController::class)->group(function () {
    //     Route::post('/send-form', 'sendContact');
    // });
    
    Route::view('/contact-us','contact-us');
    Route::view('/about-us','about-us');
    Route::view('/our-events','events');
    Route::view('/connect','connect');
    Route::view('/your-story','story');

});
