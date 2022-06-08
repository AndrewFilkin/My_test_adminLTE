<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BlogPostController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//My routes
Route::group([ 'middleware' => 'check_admin_or_not', 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function () {
        return view('admin.main');
    });

});
//Blog
Route::group([], function () {

    Route::get('/', [App\Http\Controllers\Blog\BlogPostController::class, 'index'])->name('home');



    Route::resource('blog', BlogPostController::class);

});


