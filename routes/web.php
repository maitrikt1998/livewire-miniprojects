<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter',App\Livewire\Counter::class)->name('counter');
Route::get('/calculator',App\Livewire\Calculator::class)->name('calculator');
Route::get('/cascading-dropdown',App\Livewire\CascadingDropdown::class)->name('cascading-dropdown');
Route::get('/product',App\Livewire\Product::class)->name('product');
