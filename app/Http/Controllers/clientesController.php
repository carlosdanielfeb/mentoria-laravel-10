<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Componentes;
use Illuminate\Http\Request;
use App\Http\Requests\formRequestClientes;


class clientesController extends Controller
{   


        public function __construct(Cliente $cliente)
        {
          $this->cliente= $cliente;
        }
      
        public function index(Request $request)
        {
          $pesquisar = $request->pesquisar;
          $findCliente = $this->cliente->getClientesPesquisarIndex(search: $pesquisar ?? '' );
      
          return view('pages.clientes.paginacao', compact('findCliente'));
        }

       //ajax
        public function delete(Request $request)
        {
        
          $id = $request->id;
          $buscaRegistro = Cliente::find($id);
          $buscaRegistro->delete();
      
       return response()->json(['success' => true]);
        }
      
       public function cadastrarCliente(formRequestClientes $request)
        {
            if ($request->method() == "POST") {
      
                $data = $request->all();  

                $componentes = new Componentes();
                Cliente::create($data);
                 
                return redirect()->route('clientes.index');
            }
            return view('pages.clientes.create');
        }
      
        
   
       public function atualizarCliente(formRequestClientes $request, $id)
        {
            if ($request->method() == "PUT") {
              //atualiza os dados
                $data = $request->all();           
                $componentes = new Componentes();
                $buscaRegistro = Cliente::find($id);
                $buscaRegistro->update($data);
      
                return redirect()->route('clientes.index');
            }   
             $findCliente = Cliente::where('id', '=', $id)->first();
            return view('pages.clientes.atualiza', compact('findCliente'));
      
      
        }
    }

