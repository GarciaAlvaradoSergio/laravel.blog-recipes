<?php

use App\Http\Controllers\Autor\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');