<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class,'index'])->middleware('auth')->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(UniversityController::class)->prefix('universities')->group(function () {
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('', 'index')->name('universities');
        Route::get('create', 'create')->name('universities.create');
        Route::post('store', 'store')->name('universities.store');
        Route::get('show/{id}', 'show')->name('universities.show');
        Route::get('edit/{id}', 'edit')->name('universities.edit');
        Route::put('edit/{id}', 'update')->name('universities.update');
        Route::delete('destroy/{id}', 'destroy')->name('universities.destroy');
    });
});

require __DIR__.'/auth.php';
