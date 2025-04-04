<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class clientesController extends Controller
{
    public function index (){
        public function __construct(cliente $cliente)
        {
          $this->cliente = $cliente;
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
          $buscaRegistro = Cliente::find($id);
          $buscaRegistro->delete();
      
       return response()->json(['success' => true]);
        }
      
        public function cadastrarProduto(Request $request)
        {
            if ($request->method() == "POST") {
      
                $data = $request->except('_token');  
                
                $componentes = new Componentes();
                $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
      
                $data['created_at'] = now();
                $data['updated_at'] = now();
                Cliente::insert($data);
                 
                return redirect()->route('cliente.index');
            }
            return view('pages.cliente');
        }
      
        
      //editar produto
       public function atualizarProduto(formRequestCliente $request, $id)
        {
            if ($request->method() == "PUT") {
              //atualiza os dados
                $data = $request->all();           
                $componentes = new Componentes();
                $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
                $buscaRegistro = Cliente::find($id);
                $buscaRegistro->update($data);
      
                return redirect()->route('produto.index');
            }   
             $findProduto = Cliente::where('id', '=', $id)->first();
            return view('pages.produtos.atualiza', compact('findProduto'));
      
      
        }
    }
}
