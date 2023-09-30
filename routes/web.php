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
// about
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('about/profile', [AboutController::class, 'profile'])->name('profile');
Route::get('/about/people', [AboutController::class, 'people'])->name('people');
Route::get('/about/designMethod', [AboutController::class, 'designMethod'])->name('designMethod');
Route::get('/about/event', [AboutController::class, 'event'])->name('event');
Route::get('/about/client', [AboutController::class, 'client'])->name('client');
Route::get('/about/award', [AboutController::class, 'award'])->name('award');
// store
Route::get('/store', [StoreController::class, 'index'])->name('store');
Route::get('/store/3d-furniture', [StoreController::class, 'dFurniture'])->name('3d-Furniture');
Route::get('/store/3d-architecture', [StoreController::class, 'darchitecture'])->name('3d-architecture');
Route::get('/store/3d-booth', [StoreController::class, 'dbooth'])->name('3d-booth');
Route::get('/store/furniture', [StoreController::class, 'furniture'])->name('furniture');
Route::get('/store/decoration', [StoreController::class, 'decoration'])->name('decoration');
Route::get('/store/florist', [StoreController::class, 'florist'])->name('florist');
// service
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service/architecture', [ServiceController::class, 'architecture'])->name('architecture');
Route::get('/service/interior-design', [ServiceController::class, 'interiorDesign'])->name('interiorDesign');
Route::get('/service/interior-public', [ServiceController::class, 'interiorPublic'])->name('interiorPublic');
Route::get('/service/booth-design', [ServiceController::class, 'boothDesign'])->name('boothDesign');
Route::get('/service/virtual-office', [ServiceController::class, 'virtualOffice'])->name('virtualOffice');
Route::get('/service/wedding-decoration', [ServiceController::class, 'weddingDecoration'])->name('weddingDecoration');
// news
Route::get('/news', [PostController::class, 'index'])->name('news');
Route::get('/news/{post:id}', [PostController::class, 'show']);
//contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/service', [ContactController::class, 'service'])->name('c-service');
Route::get('/contact/partner', [ContactController::class, 'partner'])->name('partner');
Route::get('/contact/invest', [ContactController::class, 'invest'])->name('invest');
Route::get('/contact/course', [ContactController::class, 'course'])->name('course');
Route::get('/contact/freelance', [ContactController::class, 'freelance'])->name('freelance');
Route::get('/contact/donation', [ContactController::class, 'donation'])->name('donation');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';