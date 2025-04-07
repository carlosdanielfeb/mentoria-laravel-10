<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request ;
use App\Http\Requests\formRequestProduto;
use App\Http\Requests\Componentes;
use App\Http\Controllers\produtosController;


class ProdutosController extends Controller
{
  protected Produto $produto; 

  public function __construct(Produto $produto)
  {
    $this->produto = $produto;
  }

  public function index(Request $request)
  {
    $pesquisar = $request->pesquisar;
    $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');

    return view('pages.produtos.paginacao', compact('findProduto'));
  }

  public function delete(Request $request)
  {
  
    $id = $request->id;
    $buscaRegistro = Produto::find($id);
    $buscaRegistro->delete();



 return response()->json(['success' => true]);
  }

  public function cadastrarProduto(formRequestProduto $request)
  {
      if ($request->method() == "POST") {

          $data = $request->except('_token');  
          
          $componentes = new Componentes();
          $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);

          $data['created_at'] = now();
          $data['updated_at'] = now();
          Produto::insert($data);
           
          return redirect()->route('produto.index');
      }
      return view('pages.produtos.create');
  }

  
//editar produto
 public function atualizarProduto(formRequestProduto $request, $id)
  {
      if ($request->method() == "PUT") {
        //atualiza os dados
          $data = $request->all();           
          $componentes = new Componentes();
          $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
          $buscaRegistro = Produto::find($id);
          $buscaRegistro->update($data);

          return redirect()->route('produto.index');
      }   
       $findProduto = Produto::where('id', '=', $id)->first();
      return view('pages.produtos.atualiza', compact('findProduto'));


  }
}
