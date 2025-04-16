<?php

use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::post('/user/{user}/toggle-lock', [UserController::class, 'toggleLock'])->name('users.toggle-lock');
    Route::post('/user/{user}/make-admin', [UserController::class, 'makeAdmin'])->name('users.make-admin');
    Route::post('/{user}/remove-admin', [UserController::class, 'removeAdmin'])->name('users.remove-admin');

    //Categories

    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        Route::get('list-categories', [CategoryController::class, 'index'])->name('index');
        Route::get('add-category', [CategoryController::class, 'create'])->name('create');
        Route::post('add-category', [CategoryController::class, 'store'])->name('store');
        Route::get('delete-category/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::get('edit-category/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('delete-category/{id}', [CategoryController::class, 'destroy'])->name('delete');
    });

    //Colors
    Route::group(['prefix' => 'colors', 'as' => 'colors.'], function () {
        Route::get('list-colors', [ColorController::class, 'index'])->name('index');
        Route::get('add-color', [ColorController::class, 'create'])->name('create');
        Route::post('add-color', [ColorController::class, 'store'])->name('store');
        Route::get('delete-color/{id}', [ColorController::class, 'edit'])->name('edit');
        Route::get('edit-color/{id}', [ColorController::class, 'update'])->name('update');
        Route::delete('delete-color/{id}', [ColorController::class, 'destroy'])->name('destroy');
    });

    //Products
    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::get('list-products', [ProductController::class, 'index'])->name('index');
        Route::get('add-product', [ProductController::class, 'create'])->name('create');
        Route::post('add-product', [ProductController::class, 'store'])->name('store');
        Route::get('delete-product/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::get('edit-product/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('delete-product/{id}', [ProductController::class, 'destroy'])->name('destroy');
    });
});

Route::get('/', function () {
    return view('client.home');
});
