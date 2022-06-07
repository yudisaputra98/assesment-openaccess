<?php

use Illuminate\Http\Request;
use Modules\Produk\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('produk')->group(function() {
    Route::get('/', [ProdukController::class, 'index'])->name('index');
    Route::get('/{id}', [ProdukController::class, 'show'])->name('show');
    Route::post('/', [ProdukController::class, 'store'])->name('store');
    Route::put('/{id}', [ProdukController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProdukController::class, 'destroy'])->name('destroy');
});