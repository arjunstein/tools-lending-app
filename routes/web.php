<?php

use App\Livewire\Auth\Login;
use App\Livewire\Category\CreateCategory;
use App\Livewire\Category\EditCategory;
use App\Livewire\Category\ListCategory;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Index as DashboardIndex;

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
    return redirect('auth/login');
});

Route::get('/home', function () {
    return redirect('/backend/dashboard');
})->middleware('auth');

Route::prefix('backend')->middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardIndex::class)->name('dashboard');

    // Manage category
    Route::get('/category/list', ListCategory::class)->name('list-category');
    Route::get('/category/create', CreateCategory::class)->name('create-category');
    Route::get('/category/{id}/edit', EditCategory::class)->name('edit-category');
});

Route::get('/auth/login', Login::class)->name('login')->middleware('guest');
