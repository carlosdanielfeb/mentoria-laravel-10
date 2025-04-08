<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\DashboardController;
Route::prefix('Dashboard')->group(function () {
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');     
});

 /* Produtos*/
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

 /* Clientes*/ 
use App\Http\Controllers\clientesController;
    Route::prefix('clientes')->group(function () {
    Route::get('/', [clientesController::class, 'index'])->name('clientes.index');
    Route::get('/cadastrarCliente', [clientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');
    Route::post('/cadastrarCliente', [clientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');   
    Route::get('/atualizarCliente/{id}', [clientesController::class, 'atualizarCliente'])->name('atualizar.cliente');
    Route::put('/atualizarCliente/{id}', [clientesController::class, 'atualizarCliente'])->name('atualizar.cliente');   
    Route::delete('/delete', [clientesController::class, 'delete'])->name('cliente.delete');

  });
  
  /* Vendas*/ 
use App\Http\Controllers\vendasController;
    Route::prefix('vendas')->group(function () {
      Route::get('/', [vendasController::class, 'index'])->name('vendas.index');
      Route::get('/cadastrarVenda', [vendasController::class, 'cadastrarVendas'])->name('cadastrar.venda');
      Route::post('/cadastrarVenda', [vendasController::class, 'cadastrarVendas'])->name('cadastrar.venda');   
    });
 

/* usuarios*/ 
    use App\Http\Controllers\UsuarioController;
    
    Route::prefix('usuario')->group(function () {
        Route::get('/', [UsuarioController::class, 'index'])->name('usuario.index');
   
        Route::get('/cadastrarUsuario', [UsuarioController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');
        Route::post('/cadastrarUsuario', [UsuarioController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');   
    //Atualizar 
        Route::get('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('atualizar.usuario');
        Route::put('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('atualizar.usuario');
        
        Route::delete('/delete', [UsuarioController::class, 'delete'])->name('usuario.delete');
    });
    