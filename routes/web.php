<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(KategoriController::class)->prefix('kategoris')->group(function () {
        Route::get('', 'index')->name('kategoris');
        Route::get('create', 'create')->name('kategoris.create');
        Route::post('store', 'store')->name('kategoris.store');
        Route::get('show/{id}', 'show')->name('kategoris.show');
        Route::get('edit/{id}', 'edit')->name('kategoris.edit');
        Route::put('edit/{id}', 'update')->name('kategoris.update');
        Route::delete('destroy/{id}', 'destroy')->name('kategoris.destroy');
    });

    Route::controller(SupplierController::class)->prefix('suppliers')->group(function () {
        Route::get('', 'index')->name('suppliers');
        Route::get('create', 'create')->name('suppliers.create');
        Route::post('store', 'store')->name('suppliers.store');
        Route::get('show/{id}', 'show')->name('suppliers.show');
        Route::get('edit/{id}', 'edit')->name('suppliers.edit');
        Route::put('edit/{id}', 'update')->name('suppliers.update');
        Route::delete('destroy/{id}', 'destroy')->name('suppliers.destroy');
    });

    Route::controller(TransaksiController::class)->prefix('transaksi')->group(function () {
        Route::get('', 'index')->name('transaksi');
        Route::get('create', 'create')->name('transaksi.create');
        Route::post('store', 'store')->name('transaksi.store');
        Route::get('show/{id}', 'show')->name('transaksi.show');
        Route::get('edit/{id}', 'edit')->name('transaksi.edit');
        Route::put('edit/{id}', 'update')->name('transaksi.update');
        Route::delete('destroy/{id}', 'destroy')->name('transaksi.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});