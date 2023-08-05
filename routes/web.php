<?php

use App\Livewire\Components\Dashboard;
use App\Livewire\Components\Money;
use App\Livewire\Components\Product;
use App\Livewire\Components\Report;
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
Route::get('/money', Money::class)->name('money');
Route::get('/product', Product::class)->name('product');
Route::get('/report', Report::class)->name('report');