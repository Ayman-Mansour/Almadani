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
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/services', function () {
//     return view('services');
// })->middleware(['auth'])->name('services');
// Route::resource('/services', 'ServicesController');
// Route::get('/add-service', function () {
//     return view('add-service');
// })->middleware(['auth'])->name('add-service');

Route::resource('/services','App\Http\Controllers\ServicesController');

Route::post('/services/store','App\Http\Controllers\ServicesController@store');
Route::post('/services/{id}/update','App\Http\Controllers\ServicesController@update');
Route::delete('/services/delete/{id}','App\Http\Controllers\ServicesController@destroy');

Route::get('/reports', function () {
    return view('reports');
})->middleware(['auth'])->name('reports');

Route::get('/employees', function () {
    return view('employees');
})->middleware(['auth'])->name('employees');

Route::resource('/invoices','App\Http\Controllers\InvoicesController');


// Route::get('/invoices', function () {
//     return view('invoices');
// })->middleware(['auth'])->name('invoices');


require __DIR__.'/auth.php';
