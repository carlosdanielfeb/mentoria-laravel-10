<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Venda;
use App\Http\Requests\formRequestVenda;
use App\Models\Produto;
use App\Models\Cliente;

class vendasController extends Controller
{
   
  public function __construct(Venda $venda)
  {
    $this->venda = $venda;
  }

  public function index(Request $request)
  {
    $pesquisar = $request->pesquisar;
    $findVendas = $this->venda->getVendasPesquisarIndex(search: $pesquisar ?? '');

    return view('pages.vendas.paginacao', compact('findVendas'));
  }


  public function cadastrarVendas(formRequestVenda $request)
{       $findNumeracao = Venda::max('numero_da_venda') + 1 ;
        $findProduto = Produto::all();
        $findCliente = Cliente::all();
      if ($request->method() == "POST") {
          $data = $request->all();    
          $data['numero_da_venda'] = $findNumeracao;        
          Venda::create($data);

          return redirect()->route('vendas.index');
      }
      
      return view('pages.vendas.create', compact('findNumeracao', 'findProduto', 'findCliente'));
  }
}
