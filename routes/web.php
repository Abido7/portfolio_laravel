<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
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

Route::middleware('lang')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/team', [TeamController::class, 'index'])->name('team');
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact/sumit', [ContactController::class, 'submit'])->name('contact.submit');
});

Route::get('lang/set/{lang}', [LangController::class, 'setLang']);