<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LamaranPekerjaanController;
use App\Http\Controllers\LowonganPekerjaanController;
use App\Http\Controllers\PelamarController;
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
    return view('welcome');
})->name("welcome");

Route::get('/halaman', function () {
    return view('halaman');
})->name('halaman');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('lowongan')->middleware(['auth'])->group(function () {
    Route::get('/', [LowonganPekerjaanController::class, 'index'])->name('lowongan.index');
    Route::get('/create', [LowonganPekerjaanController::class, 'create'])->name('lowongan.create');
    Route::post('/', [LowonganPekerjaanController::class, 'store'])->name('lowongan.store');
    Route::get('/{id}/edit', [LowonganPekerjaanController::class, 'edit'])->name('lowongan.edit');
    Route::patch('/{id}', [LowonganPekerjaanController::class, 'update'])->name('lowongan.update');
    Route::delete('/{id}', [LowonganPekerjaanController::class, 'destroy'])->name('lowongan.destroy');
});
Route::prefix('pelamar')->middleware(['auth'])->group(function () {
    Route::get('/', [PelamarController::class, 'index'])->name('pelamar.index');
    Route::get('/create', [PelamarController::class, 'create'])->name('pelamar.create');
    Route::post('/', [PelamarController::class, 'store'])->name('pelamar.store');
    Route::get('/{id}/edit', [PelamarController::class, 'edit'])->name('pelamar.edit');
    Route::patch('/{id}', [PelamarController::class, 'update'])->name('pelamar.update');
    Route::delete('/{id}', [PelamarController::class, 'destroy'])->name('pelamar.destroy');
});
Route::prefix('lamaran')->middleware(['auth'])->group(function () {
    Route::get('/', [LamaranPekerjaanController::class, 'index'])->name('lamaran.index');
    Route::get('/create', [LamaranPekerjaanController::class, 'create'])->name('lamaran.create');
    Route::post('/', [LamaranPekerjaanController::class, 'store'])->name('lamaran.store');
    Route::delete('/{id}', [LamaranPekerjaanController::class, 'destroy'])->name('lamaran.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
