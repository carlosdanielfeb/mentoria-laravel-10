@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Criar novo cliente</h1>
    </div>

    <form class="form" method="POST" action="{{ route('cadastrar.cliente') }}">
        @csrf

        <div class="form-group">
            <label><b>Nome</b></label>
            <input id="nome" value="{{ old('nome') }}" type="text"
                class="form-control @error('nome') is-invalid @enderror" name="nome">
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>Email</b></label>
            <input id="email" value="{{ old('email') }}" type="email"
                class="form-control @error('email') is-invalid @enderror" name="email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>Endereço</b></label>
            <input id="endereco" value="{{ old('endereco') }}" type="text"
                class="form-control @error('endereco') is-invalid @enderror" name="endereco">
            @error('endereco')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>Logradouro</b></label>
            <input id="logradouro" value="{{ old('logradouro') }}" type="text"
                class="form-control @error('logradouro') is-invalid @enderror" name="logradouro">
            @error('logradouro')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>CEP</b></label>
            <input id="cep" value="{{ old('cep') }}" type="text"
                class="form-control @error('cep') is-invalid @enderror" name="cep">
            @error('cep')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>Bairro</b></label>
            <input id="bairro" value="{{ old('bairro') }}" type="text"
                class="form-control @error('bairro') is-invalid @enderror" name="bairro">
            @error('bairro')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>


        <br>

        <button type="submit" class="btn btn-success">CADASTRAR</button>
    </form>
@endsection
