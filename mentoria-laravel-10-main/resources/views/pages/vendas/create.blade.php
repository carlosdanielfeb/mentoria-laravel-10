@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Nova Venda</h1>
    </div>

    <form class="form" method="POST" action="{{ route('cadastrar.venda') }}">
        @csrf


        <div class="form-group">
            <label><b>Numeração</b></label>
            <input id="numero_da_venda " type="text" name="nonumero_da_venda "
                value=" {{ $findNumeracao }}" disabled   class="form-control @error('numero_da_venda')
                 is-invalid @enderror">
        
         @if  ($errors->has('numero_da_venda'))
                <div class="invalid-feedback">{{ $errors->first('numero_da_venda') }}</div>
         @endif
        </div>

        <br>

        <div class="mb-3">
        <label class="form-label"><b>Produto</b></label>
        <select class="form-select" name="produtos_id" aria-label="Default select example">

        <option selected>Clique para selecionar</option>
       @foreach ($findProduto as $produto)
        <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
        @endforeach
        </select>
        </div>
         <br>
        <div class="mb-3">
        <label class="form-label"><b>Cliente</b></label>
        <select class="form-select" name="cliente_id" aria-label="Default select example">
            
        <option selected>Clique para selecionar</option>
       @foreach ($findCliente as $cliente)
        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
        @endforeach
        </select>
        </div>



        
<br>
        <button type="submit" class="btn btn-success">CADASTRAR</button>
    </form>
@endsection

