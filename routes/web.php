<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/store', [StoreController::class, 'index'])->name('store');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/news', [PostController::class, 'index'])->name('news');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('about/profile', [AboutController::class, 'profile'])->name('profile');
Route::get('/about/people', [AboutController::class, 'people'])->name('people');
Route::get('/about/designMethod', [AboutController::class, 'designMethod'])->name('designMethod');
Route::get('/about/event', [AboutController::class, 'event'])->name('event');
Route::get('/about/client', [AboutController::class, 'client'])->name('client');
Route::get('/about/award', [AboutController::class, 'award'])->name('award');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';