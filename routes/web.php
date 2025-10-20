<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PageController.php;

Route::get('/login', [PageController::class, 'showLogin'])-> name('login');
Route::get('/dashboard', [PageController::class, 'showDashboard']);
Route::get('/pengelolaan', [PageController::class, 'showPengelolaan']);
Route::get('/profile', [PageController::class, 'showProfile']);

Route::post('/login', [PageController::class, 'handleLogin']);