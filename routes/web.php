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

Route::get('/', function () {
    return view('web.index');
});

Route::get('/artikel', function () {
    return view('web.artikel');
});

Route::get('/kontak', function () {
    return view('web.kontak');
});

Route::get('/paket', function () {
    return view('web.paket');
});

Route::resource('/wisata', \App\Http\Controllers\WebWisataController::class);
Route::resource('/dokumentasi', \App\Http\Controllers\WebDokumController::class);
Route::resource('/video', \App\Http\Controllers\WebVideoController::class);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('/admin-wisata', \App\Http\Controllers\WisataController::class);
    Route::resource('/admin-budaya', \App\Http\Controllers\BudayaController::class);
    Route::resource('/admin-kuliner', \App\Http\Controllers\KulinerController::class);
    Route::resource('/admin-dokum', \App\Http\Controllers\DokumController::class);
    Route::resource('/admin-video', \App\Http\Controllers\VideoController::class);
});

require __DIR__ . '/auth.php';
