<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BlogPostController;
use App\Models\BlogPost;

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

//admin
Route::group(['middleware' => 'check_admin_or_not', 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function () {
        return view('admin.main');
    });

    Route::get('/articles', function () {
        return view('admin.articles');
    });



});
//Blog
Route::group([], function () {

    Route::get('/', [App\Http\Controllers\Blog\BlogPostController::class, 'index'])->name('home');
//    Route::resource('blog', BlogPostController::class);


    Route::get('blog', [BlogPostController::class, 'index']);

    Route::get('blog/create', [BlogPostController::class, 'create']);

    Route::post('blog', [BlogPostController::class, 'store']);

    Route::get('blog/{blog}/edit', [BlogPostController::class, 'edit']);

    Route::put('blog/{blog}', [BlogPostController::class, 'update']);

    Route::get('/blog/{blog:slug}', [BlogPostController::class, 'show'])->name('blog.show');

    Route::delete('blog/{blog}', [BlogPostController::class, 'destroy']);


//    Route::get('/blog/{post:slug}', function (BlogPost $post) {
//        return $post->slug;
//    });


});


