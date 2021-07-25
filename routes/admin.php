<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('admin', [])->name('admin');

Route::get('', [HomeController::class, 'index'])->name('admin.index');
