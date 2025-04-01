<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;

class produtosController extends Controller
{
   public function index (){
    $findProduto = Produto::all();
    dd($findProduto);
    return 'produtos';
  }
} 

