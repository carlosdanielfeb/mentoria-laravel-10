<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;

class produtosController extends Controller
{
public function __construct(Produto $produto)
{
  $this->produto = $produto;
}
   public function index (Request $request){
      $findProduto = Produto::all();
    return \view('pages.produtos.paginacao', compact('findProduto'));
  }
} 

