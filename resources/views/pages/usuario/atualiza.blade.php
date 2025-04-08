@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Usuário</h1>
    </div>

    <form class="form" method="POST" action="{{ route('atualizar.usuario', $findUsuario->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label><b>Nome</b></label>
            <input type="text" name="name" value="{{ isset($findUsuario->name) ? $findUsuario->name : old('name') }}"
                class="form-control @error('name') is-invalid @enderror">

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>Email</b></label>
            <input type="email" name="email"
                value="{{ isset($findUsuario->email) ? $findUsuario->email : old('email') }}"
                class="form-control @error('email') is-invalid @enderror">

            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div class="form-group">
            <label><b>Nova Senha></b></label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">

            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <button type="submit" class="btn btn-success">CONFIRMAR</button>
    </form>
@endsection
