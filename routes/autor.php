<?php

use App\Http\Controllers\Backend\AutorController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AutorController::class, 'dashboard'])->name('dashboard');