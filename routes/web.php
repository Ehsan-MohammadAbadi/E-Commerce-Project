<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Home page
Route::get('/', function () {
    return view('index');
})->name('index');


// Separate admin and user dashboard
Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


//Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin
Route::middleware('admin')->group(function () {
    Route::get('add_category', [AdminController::class, 'addCategory'])->name('admin.addcategory');
    Route::post('admin.postaddcategory', [AdminController::class, 'postAddCategory'])->name('admin.postaddcategory');
});

require __DIR__.'/auth.php';
