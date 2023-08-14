<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Administrator\Book\BookController;
use App\Http\Controllers\Administrator\User\UserController;

use App\Http\Controllers\Administrator\Genre\GenreController;
use App\Http\Controllers\Book\BookController as UserBookController;
use App\Http\Controllers\Administrator\Dashboard\DashboardController;
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
})->name('welcome');


Route::prefix('auth')->middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'index'])->name('auth');
    Route::post('/signin',[AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/create',[AuthController::class, 'store'])->name('auth.store');
});
Route::get('/logout',[AuthController::class, 'logout'])->name('auth.logout');


Route::prefix('apps')->middleware('auth')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::prefix('genres')->group(function() {
        Route::get('', [GenreController::class, 'index'])->name('admin.genres');
        Route::get('create', [GenreController::class, 'create'])->name('admin.genres.create');
        Route::post('store', [GenreController::class, 'store'])->name('admin.genres.store');
        Route::get('edit/{id}', [GenreController::class, 'edit'])->name('admin.genres.edit');
        Route::post('update/{id}', [GenreController::class, 'update'])->name('admin.genres.update');
        Route::get('delete/{id}',[GenreController::class,'delete'])->name('admin.genres.delete');
    });

    Route::prefix('books')->group(function() {
        Route::get('', [BookController::class, 'index'])->name('admin.book');
        Route::get('create', [BookController::class, 'create'])->name('admin.books.create');
        Route::post('store', [BookController::class, 'store'])->name('admin.books.store');
        Route::get('detail/{id}', [BookController::class, 'detail'])->name('admin.books.detail');
        Route::get('edit/{id}', [BookController::class, 'edit'])->name('admin.books.edit');
        Route::post('update/{id}', [BookController::class, 'update'])->name('admin.books.update');
        Route::get('delete/{id}',[BookController::class,'delete'])->name('admin.books.delete');
    });

    Route::prefix('users')->group(function() {
        Route::get('', [UserController::class, 'index'])->name('admin.users');
        Route::get('create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('store', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::post('update/{id}', [UserController::class, 'update'])->name('admin.users.update');
        Route::get('delete/{id}',[UserController::class,'delete'])->name('admin.users.delete');
    });
});

Route::prefix('pages')->middleware('auth')->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');

    Route::prefix('books')->group(function() {
        Route::get('', [UserBookController::class,'index'])->name('user.books');
        Route::get('genres/{name}', [UserBookController::class,'genre'])->name('user.getGenres');
        Route::get('details/{book}', [UserBookController::class,'details'])->name('user.details');
        // Route::get('search', [UserBookController::class,'search'])->name('user.search');


    });
});
