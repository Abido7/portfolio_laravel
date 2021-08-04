<?php

use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\LangController;
use App\Http\Controllers\web\ServiceController;
use App\Http\Controllers\web\TeamController;
use App\Http\Controllers\web\TestimonialController;
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


Route::get('lang/set/{lang}', [LangController::class, 'setLang']);

Route::middleware('lang')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/team', [TeamController::class, 'index'])->name('team');
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact')->middleware('verified');
    Route::post('/contact/sumit', [ContactController::class, 'submit'])->name('contact.submit');
});

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminHomeController::class, 'index']);
    Route::get('/homes/show/{home}', [AdminHomeController::class, 'show']);
    Route::post('/homes/store', [AdminHomeController::class, 'store']);
    Route::patch('/homes/update', [AdminHomeController::class, 'update']);
    Route::delete('/homes/delete', [AdminHomeController::class, 'delete']);
});