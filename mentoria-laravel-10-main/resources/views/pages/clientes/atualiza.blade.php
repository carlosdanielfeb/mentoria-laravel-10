@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Cliente</h1>
    </div>

    <form class="form" method="POST" action="{{ route('atualizar.cliente', $findCliente->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label><b>Nome</b></label>
            <input id="nome" type="text" name="nome"
                value="{{ isset($findCliente->nome) ? $findCliente->nome : old('nome') }}"
                class="form-control @error('nome') is-invalid @enderror">
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>Email</b></label>
            <input id="email" type="email" name="email"
                value="{{ isset($findCliente->email) ? $findCliente->email : old('email') }}"
                class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <br>

<div class="form-group">
    <label><b>CEP</b></label>
    <input id="cep" type="text" name="cep"
        value="{{ isset($findCliente->cep) ? $findCliente->cep : old('cep') }}"
        class="form-control @error('cep') is-invalid @enderror">
    @error('cep')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
        <br>

       

        <div class="form-group">
            <label><b>Logradouro</b></label>
            <input id="logradouro" type="text" name="logradouro"
                value="{{ isset($findCliente->logradouro) ? $findCliente->logradouro : old('logradouro') }}"
                class="form-control @error('logradouro') is-invalid @enderror">
            @error('logradouro')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>Bairro</b></label>
            <input id="bairro" type="text" name="bairro"
                value="{{ isset($findCliente->bairro) ? $findCliente->bairro : old('bairro') }}"
                class="form-control @error('bairro') is-invalid @enderror">
            @error('bairro')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>Endereço</b></label>
            <input id="endereco" type="text" name="endereco"
                value="{{ isset($findCliente->endereco) ? $findCliente->endereco : old('endereco') }}"
                class="form-control @error('endereco') is-invalid @enderror">
            @error('endereco')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <br>
          <br>

        <button type="submit" class="btn btn-success">CONFIRMAR</button>
    </form>
@endsection
