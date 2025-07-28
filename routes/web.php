<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
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

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('/admin/login_submit', [AdminController::class, 'AdminLoginSubmit'])->name('admin.login_submit');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');



Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

});

Route::get('/studio', function () {
    return view('frontend.photographie.daemonstudio');
});



Route::get('/ecole/digital', [App\Http\Controllers\EcoleController::class, 'IndexEcole'])->name('ecole.index');
Route::get('/form', [App\Http\Controllers\EcoleController::class, 'Form'])->name('ecole.form');

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/merci', [ContactController::class, 'merci'])->name('contact.merci');

use App\Http\Controllers\BriefController;

Route::get('/brief/merci', [BriefController::class, 'merci'])->name('brief.merci');
Route::post('/brief/submit', [BriefController::class, 'submit'])->name('brief.submit');

