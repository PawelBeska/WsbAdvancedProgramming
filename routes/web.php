<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth'])->group(function () {
    Route::name('home.')->middleware('check.locale')->group(function () {
        Route::get('/', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('index');

        Route::get('/o-mnie', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('about.index');

        Route::resource('movies', \App\Http\Controllers\Home\MoviesController::class);
        Route::post('/movies/get', [\App\Http\Controllers\Home\MoviesController::class, 'getData'])->name('movies.get');


        Route::resource('employees', \App\Http\Controllers\Home\EmployeeController::class);
        Route::post('/employees/get', [\App\Http\Controllers\Home\EmployeeController::class, 'getData'])->name('employees.get');

        Route::resource('posts', \App\Http\Controllers\Home\PostsController::class)->except(['update']);
        Route::post('/posts/get', [\App\Http\Controllers\Home\PostsController::class, 'getData'])->name('posts.get');
        Route::post('/posts/{post}', [\App\Http\Controllers\Home\PostsController::class, 'update'])->name('posts.update');

        Route::any('/logout', function () {
            Auth::logout();
            return redirect()->route('home.index');
        })->name('logout');

    });
});

Route::middleware(['check.locale'])->group(function () {
    Auth::routes();
    Route::get('set-locale/{locale}', function ($locale) {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    })->name('home.locale.setting');

    Route::get('/blog',[\App\Http\Controllers\Home\BlogController::class,'index'])->name('home.blog.index');
    Route::get('/blog/{id}',[\App\Http\Controllers\Home\BlogController::class,'show'])->name('home.blog.show');
});
