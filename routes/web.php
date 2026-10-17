<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - IT0049 TFA5: POS Application
|--------------------------------------------------------------------------
|
| Four primary pages are defined using MVC architecture:
| 1. Landing / Home page ('/')
| 2. About page ('/about')
| 3. Customer Accounts page ('/customers')
| 4. User Accounts page ('/users')
|
*/

// Landing Page
Route::get('/', [PageController::class, 'home'])->name('home');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Customer Accounts Page
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

// User Accounts Page
Route::get('/users', [UserController::class, 'index'])->name('users.index');
