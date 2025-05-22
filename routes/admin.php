<?php

use App\Http\Controllers\Administrator\HomeController;
use App\Livewire\Administrator\Category\Partials\CreateCategory;
use App\Livewire\Administrator\Category\Partials\UpdateCategory;
use App\Livewire\Administrator\Category\ShowCategories;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('categories', ShowCategories::class)->name('categories');
Route::get('categories/create', CreateCategory::class)->name('categories.create');
Route::get('categories/{category}/edit', UpdateCategory::class)->name('categories.edit');