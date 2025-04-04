<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});



use App\Http\Controllers\produtosController;

      Route::prefix('produtos')->group(function () {
      Route::get('/', [produtosController::class, 'index'])->name('produto.index');     
      //Cadastro de Produto Create
      Route::get('/cadastrarProduto', [produtosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
      Route::post('/cadastrarProduto', [produtosController::class, 'cadastrarProduto'])->name('cadastrar.produto');   
      //Atualizar produto
      Route::get('/atualizarProduto/{id}', [produtosController::class, 'atualizarProduto'])->name('atualizar.produto');
      Route::put('/atualizarProduto/{id}', [produtosController::class, 'atualizarProduto'])->name('atualizar.produto');
      Route::delete('/delete', [produtosController::class, 'delete'])->name('produto.delete');

    });

    
use App\Http\Controllers\vendasController;
Route::prefix('vendas')->group(function () {
        Route::get('/', [vendasController::class, 'index'])->name('vendas.index');
      });


    use App\Http\Controllers\clientesController;
    Route::prefix('clientes')->group(function () {
    Route::get('/', [clientesController::class, 'index'])->name('clientes.index');

    //Cadastro de Produto Create
    Route::get('/cadastrarClientes', [produtosController::class, 'cadastrarClientes'])->name('cadastrar.clientes');
    Route::post('/cadastrarClientes', [produtosController::class, 'cadastrarClientes'])->name('cadastrar.clientes');   
    
    //Atualizar produto
    Route::get('/atualizarClientes/{id}', [produtosController::class, 'atualizarProduto'])->name('cadastrar.clientes');
    Route::put('/atualizarClientes/{id}', [produtosController::class, 'atualizarProduto'])->name('cadastrar.clientes');
    
    Route::delete('/delete', [produtosController::class, 'delete'])->name('cliente.delete');

  });
  