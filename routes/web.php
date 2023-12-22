<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FormController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\DashboardController;

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
    Route::post('/contact/store', [HomeController::class, 'contact_store'])->name('contact.store');
    Route::get('/table', [HomeController::class, 'table'])->name('table');
});




Route::redirect("/admin", "/login");

Route::group(['prefix' => 'admin'], function () {
    Route::name('admin.')->group(function () {

        Route::group(['middleware' => 'admin.auth'], function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




            // Testimonials
            Route::name('testimonial.')->group(function () {
                Route::get('/testimonials', [TestimonialController::class, 'index'])->name('index');
                Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('create');
                Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('store');
                Route::get('/testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('edit');
                Route::post('/testimonials/update/{id}', [TestimonialController::class, 'update'])->name('update');
                Route::get('/testimonials/destroy/{id}', [TestimonialController::class, 'destroy'])->name('destroy');
            });

            // contact form
               Route::get('/message', [FormController::class, 'message_index'])->name('message.index');
               Route::get('/message/destroy/{id}', [FormController::class, 'message_destroy'])->name('message.destroy');
              Route::post('/message/export', [FormController::class, 'message_export'])->name('message.export');


        });

        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

    });
    Route::post('/profile/image/update', [ProfileController::class, 'image_update'])->name('profile.image.update');
    Route::get('/profile/image/destroy', [ProfileController::class, 'image_destroy'])->name('profile.image.destroy');
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
