<?php

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

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita', [HomeController::class, 'news'])->name('news');
Route::get('/berita/{slug}', [HomeController::class, 'newsDetail'])->name('news.show');
Route::get('/program', [HomeController::class, 'programs'])->name('programs');
Route::get('/galeri', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/dokumen', [HomeController::class, 'documents'])->name('documents');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class);
    Route::resource('documents', \App\Http\Controllers\Admin\DocumentController::class);
    Route::resource('programs', \App\Http\Controllers\Admin\ProgramController::class);
    Route::resource('announcements', \App\Http\Controllers\Admin\AnnouncementController::class);
    Route::resource('banners', \App\Http\Controllers\Admin\BannerController::class);
    
    Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
