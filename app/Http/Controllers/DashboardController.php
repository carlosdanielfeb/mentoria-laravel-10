<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProdutosCadastrados = $this->buscaTotalProdutosCadastrados();
        $totalClientesCadastrados = $this->buscaTotalClientesCadastrados();
        $totalVendasCadastradas = $this->buscaTotalVendasCadastradas();
        $totalUsariosCadastrados = $this->buscaTotalUsuariosCadastrados();

        return view('pages.dashboard.dashboard', compact('totalProdutosCadastrados','totalClientesCadastrados', 
        'totalVendasCadastradas','totalUsariosCadastrados'));
    
}

    public function buscaTotalProdutosCadastrados(){
        $findProdutos = Produto::all()->count();
        return $findProdutos;
    }
    public function buscaTotalClientesCadastrados(){
        $findClientes = Cliente::all()->count();
        return $findClientes;
    }
    public function buscaTotalVendasCadastradas(){
        $findVendas = Venda::all()->count();
        return $findVendas;
    }
    public function buscaTotalUsuariosCadastrados(){
        $findUsarios = User::all()->count();
        return $findUsarios;
    }

}
