<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
// Route::get('/menu', [UserContorller::class, 'menu']);