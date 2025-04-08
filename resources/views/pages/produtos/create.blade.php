@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Criar novo produto</h1>
    </div>

    <form class="form" method="POST" action="{{ route('cadastrar.produto') }}">
        @csrf

        <div class="form-group">
            <label><b>Nome</b></label>
            <input id="mascara_nome" value="{{ @old('nome') }}" type="text"
                class="form-control  @error('nome') is-invalid @enderror" name='nome'>

            @if ($errors->has('nome'))
                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
            @endif


        </div>

        <br>

        <div class="form-group">
            <label><b>Valor</b></label>
            <input id="mascara_valor" type="text" name='valor' value="{{ @old('valor') }}"
                class="form-control  @error('valor') is-invalid @enderror">

            @if ($errors->has('valor'))
                <div class="invalid-feedback">{{ $errors->first('valor') }}</div>
            @endif

        </div>

        <br>

        <button type="submit" class="btn btn-success">CADASTRAR</button>
    </form>
@endsection
