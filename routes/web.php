<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\produtosController;
Route::prefix('produtos')->group(function () {
      Route::get('/', [produtosController::class, 'index'])->name('produto.index');
    });

use App\Http\Controllers\vendasController;
Route::prefix('vendas')->group(function () {
        Route::get('/', [vendasController::class, 'index'])->name('vendas.index');
      });


use App\Http\Controllers\clientesController;
Route::prefix('clientes')->group(function () {
        Route::get('/', [clientesController::class, 'index'])->name('clientes.index');
      });