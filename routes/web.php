<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/dashboard', function () {
    return redirect()->route('product.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::group(['prefix'=>'product', 'as'=>'product'], function () {
        Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->middleware('can:product.view')->name('.index');
        Route::post('/store', [\App\Http\Controllers\ProductController::class, 'store'])->middleware('can:product.store')->name('.store');
        Route::post('/update', [\App\Http\Controllers\ProductController::class, 'update'])->middleware('can:product.update')->name('.update');
        Route::post('/delete', [\App\Http\Controllers\ProductController::class, 'destroy'])->middleware('can:product.delete')->name('.delete');
    });

    Route::group(['prefix'=>'rak', 'as'=>'rak'], function () {
        Route::get('/', [\App\Http\Controllers\RakController::class, 'index'])->middleware('can:rak.view')->name('.index');
        Route::any('/data', [\App\Http\Controllers\RakController::class, 'dataTables'])->middleware('can:rak.view')->name('.data_tables');
        Route::post('/store', [\App\Http\Controllers\RakController::class, 'store'])->middleware('can:rak.store')->name('.store');
        Route::post('/update/{id}', [\App\Http\Controllers\RakController::class, 'update'])->middleware('can:rak.update')->name('.update');
        Route::post('/delete', [\App\Http\Controllers\RakController::class, 'destroy'])->middleware('can:rak.delete')->name('.delete');
    });

    Route::group(['prefix'=>'category', 'as'=>'category'], function () {
        Route::get('/', [\App\Http\Controllers\CategoryController::class, 'index'])->middleware('can:category.view')->name('.index');
        Route::any('/data', [\App\Http\Controllers\CategoryController::class, 'dataTables'])->middleware('can:category.view')->name('.data_tables');
        Route::post('/store', [\App\Http\Controllers\CategoryController::class, 'store'])->middleware('can:category.store')->name('.store');
        Route::post('/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->middleware('can:category.update')->name('.update');
        Route::post('/delete', [\App\Http\Controllers\CategoryController::class, 'destroy'])->middleware('can:category.delete')->name('.delete');
    });

    Route::group(['prefix'=>'lokasi', 'as'=>'lokasi'], function () {
        Route::get('/', [\App\Http\Controllers\LokasiController::class, 'index'])->middleware('can:lokasi.view')->name('.index');
        Route::any('/data', [\App\Http\Controllers\LokasiController::class, 'dataTables'])->middleware('can:lokasi.view')->name('.data_tables');
        Route::post('/store', [\App\Http\Controllers\LokasiController::class, 'store'])->middleware('can:lokasi.store')->name('.store');
        Route::post('/update/{id}', [\App\Http\Controllers\LokasiController::class, 'update'])->middleware('can:lokasi.update')->name('.update');
        Route::post('/delete', [\App\Http\Controllers\LokasiController::class, 'destroy'])->middleware('can:lokasi.delete')->name('.delete');
    });

    Route::get('admin', function () {
        return 'admin';
    })->middleware('role:admin')->name('admin');
    Route::get('super-admin', function () {
        return 'super admin';
    })->middleware('role:super-admin')->name('super-admin');

    Route::get('bedebah', function () {
        return view('dashboard.index');
    })->middleware('role:admin|super-admin')->name('bedebah');

});

require __DIR__.'/auth.php';
