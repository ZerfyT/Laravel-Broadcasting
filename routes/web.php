<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Livewire\Dashboard;
use App\Livewire\UsersDashboard;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Dashboard::class)->name('home');

Route::get('users', UsersDashboard::class)->name('users');

// Logger Routes
Route::get('/logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('logs');

// Route::get('/notifications', [UserController::class, 'notifications'])->name('notifications');
