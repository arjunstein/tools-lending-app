<?php

use App\Livewire\Auth\Login;
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

Route::prefix('backend')->middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardIndex::class)->name('dashboard');
});

Route::get('/auth/login', Login::class)->name('login')->middleware('guest');
