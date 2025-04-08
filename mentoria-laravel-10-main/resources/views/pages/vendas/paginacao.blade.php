

@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
    </div>
    <div>
        <form action="{{ route('vendas.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>

            <a href="{{ route('cadastrar.venda') }}" type="button" class="btn btn-success float-end">
                Incluir Venda
            </a>

        </form>

        <div class="table-responsive mt-4">

            @if ($findVendas->isEmpty())
                <p>Não existe dados</p>
            @else

                <table class="table table-st riped table-sm">
                    <thead>
                        <tr>
                            <th>Numeração</th>
                            <th>Produto</th>
                            <th>Cliente</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($findVendas as $venda) 
                            <tr>
                            <td>{{ $venda->numero_da_venda }}</td>
                            <td>{{ $venda->produto->nome}}</td>
                            <td>{{ $venda->cliente->nome }}</td>
                            <td><a href="" class="btn btn-light btn-sm"> Enviar email</a></td>
                        @endforeach                             
                            </tr>
                    </tbody>
            @endif
            </table>
        </div>
    @endsection
