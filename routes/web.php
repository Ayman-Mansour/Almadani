<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/services', function () {
    return view('services');
})->middleware(['auth'])->name('services');

Route::get('/reports', function () {
    return view('reports');
})->middleware(['auth'])->name('reports');

Route::get('/employees', function () {
    return view('employees');
})->middleware(['auth'])->name('employees');

Route::get('/invoices', function () {
    return view('invoices');
})->middleware(['auth'])->name('invoices');

require __DIR__.'/auth.php';
