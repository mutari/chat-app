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
    return view('index');
});

Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::controller(\App\Http\Controllers\RegisterController::class)->group(function () {
        Route::get('/register', 'show')->name('register');
        Route::post('/register', 'register')->name('register.perform');
    });

    /**
     * Login Routes
     */
    Route::controller(\App\Http\Controllers\LoginController::class)->group(function () {
        Route::get('/login', 'show')->name('login');
        Route::post('/login', 'login')->name('login.perform');
    });

});

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Routes
     */
    Route::controller(\App\Http\Controllers\LogoutController::class)->group(function () {
        Route::get('/logout', 'perform')->name('logout.perform');
    });

    Route::prefix('chat')->group(function() {

        Route::controller(\App\Http\Controllers\ChatController::class)->group(function () {

            Route::get('/', 'index');

        });

    });

    Route::prefix('post')->group(function () {

        Route::controller(\App\Http\Controllers\PostController::class)->group(function () {

            Route::get('/', 'index');

            Route::get('/create/post', 'createPostForm')->name('createPost');
            Route::post('/create/post', 'createPost');

            Route::get('/all', 'getAllPosts')->name('getAllPosts');

            Route::get('/get/comments/{post_id}', 'getComments');
            Route::post('/new/comment', 'newComment');

        });

    });

    Route::prefix('drinking')->group(function () {

        Route::controller(\App\Http\Controllers\DrinkingGame::class)->group(function () {

            Route::get('/', 'index');

            Route::get('/recipes', 'recipes');
            Route::get('/recipe/{id}', 'recipe');

            Route::get('/feeem', 'feeemMenu');
            Route::post('/create/game', 'createGame');

        });

    });
});
