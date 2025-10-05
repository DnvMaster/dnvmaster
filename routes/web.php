<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dnvmaster.frontend.index');
});

Route::get('/dashboard', function () {
    return view('dnvmaster.admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

require __DIR__.'/auth.php';
