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

Route::get('/', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('home.index');

Route::get('/o-mnie', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('home.about.index');


Route::get('/tabela-1', [\App\Http\Controllers\Home\Table1Controller::class, 'index'])->name('home.table-1.index');
