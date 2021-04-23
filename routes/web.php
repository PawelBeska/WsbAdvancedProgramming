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
Route::name('home.')->middleware('check.locale')->group(function () {
    Route::get('/', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('index');

    Route::get('/o-mnie', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('about.index');

    Route::resource('movies', \App\Http\Controllers\Home\MoviesController::class);
    Route::post('/movies/get', [\App\Http\Controllers\Home\MoviesController::class, 'getData'])->name('movies.get');


    Route::resource('employees', \App\Http\Controllers\Home\EmployeeController::class);
    Route::post('/employees/get', [\App\Http\Controllers\Home\EmployeeController::class, 'getData'])->name('employees.get');

    Route::get('set-locale/{locale}', function ($locale) {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    })->name('locale.setting');
});
