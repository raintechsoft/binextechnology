<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactSubmissionController;

// All routes here are automatically prefixed with 'admin' and named 'admin.'

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Contact Details Setting (Singleton)
Route::get('/contact-details', [\App\Http\Controllers\Admin\ContactDetailController::class, 'edit'])->name('contact_details.edit')->middleware('auth');
Route::put('/contact-details', [\App\Http\Controllers\Admin\ContactDetailController::class, 'update'])->name('contact_details.update')->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('services', ServiceController::class)->except(['show']);
    Route::resource('clients', ClientController::class)->except(['show']);
    Route::resource('contact_submissions', ContactSubmissionController::class)->only(['index', 'destroy']);
});
