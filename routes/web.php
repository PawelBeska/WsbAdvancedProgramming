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
Route::name('home.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('index');

    Route::get('/o-mnie', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('about.index');

    Route::resource('table-1', \App\Http\Controllers\Home\Table1Controller::class);
    Route::post('/table-1/get', [\App\Http\Controllers\Home\Table1Controller::class, 'getData'])->name('table-1.get');


    Route::resource('employees', \App\Http\Controllers\Home\EmployeeController::class);
    Route::post('/employees/get', [\App\Http\Controllers\Home\EmployeeController::class, 'getData'])->name('employees.get');
});
