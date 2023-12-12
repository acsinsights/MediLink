<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\HomeController;
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

Route::name('frontend.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');
    Route::get('/service', [HomeController::class, 'service'])->name('service');
    Route::get('/singleservices', [HomeController::class, 'singleservice'])->name('singleservices');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/treatment', [HomeController::class, 'treatment'])->name('treatment');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/singleblog', [HomeController::class, 'singleblog'])->name('singleblog');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/table', [HomeController::class, 'table'])->name('table');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
