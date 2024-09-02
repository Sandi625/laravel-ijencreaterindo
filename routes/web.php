<?php

use App\Models\Review;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TestimonialController;

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

Route::get('/', function () {
    return view('index');
});

// web.php
// Route::get('/bali', function () {
//     return view('page.bali');
// })->name('bali.page');


Route::get('/bali', function () {
    return view('page.bali');
})->name('bali.page');

Route::get('/bromo', function () {
    return view('page.bromo');
})->name('bromo.page');

Route::get('/djawatan-pulaumerah', function () {
    return view('page.djawatan-pulaumerah');
})->name('djawatan-pulaumerah.page');

Route::get('/baluran-tabuhan', function () {
    return view('page.baluran-tabuhan');
})->name('baluran-tabuhan.page');

Route::get('/village', function () {
    return view('page.village');
})->name('village.page');

Route::get('/tourvillage2', function () {
    return view('page.tourvillage2');
})->name('tourvillage2.page');


Route::get('/galeri', function () {
    return view('page.galeri');
})->name('galeri.page');

Route::get('/reviews', function () {
    return view('page.review');
})->name('reviews.page');


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/galeri', function () {
    return view('page.galeri');
})->name('galeri.page');

Route::get('/option', function () {
    return view('page.option');
})->name('option.page');

// Route::get('/review', function () {
//     return view('page.review');
// })->name('review.page');

// Route::get('/review', [TestimonialController::class, 'index'])->name('review.index');

Route::get('/reviews', [TestimonialController::class, 'index'])->name('page.review');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');





Route::post('/reviews', [TestimonialController::class, 'store'])->name('review.store');
Route::put('/reviews/{review}', [TestimonialController::class, 'update'])->name('review.update');
Route::delete('/reviews/{review}', [TestimonialController::class, 'destroy'])->name('review.destroy');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');



Route::post('/reviews', [TestimonialController::class, 'store'])->name('review.store');
// Route::get('/reviews', [TestimonialController::class, 'index'])->name('page.review');

// Route untuk halaman review
Route::get('/reviews', [TestimonialController::class, 'index'])->name('page.review');

Route::post('/reviews', [TestimonialController::class, 'store'])->name('reviews.store');
Route::post('/review', [TestimonialController::class, 'store'])->name('review.store');
Route::get('/admin/dashboard', [ReviewController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard', [ReviewController::class, 'index'])->name('admin.dashboard');










// Login Routes
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
// Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::delete('/reviews/{review}', [TestimonialController::class, 'destroy'])->name('reviews.destroy');



// Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');




Route::middleware('guest')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/login',[SesiController::class, 'index']);
Route::post('/login', [SesiController::class, 'login']);

});
Route::get('/home', function(){
    return redirect('/admin');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
