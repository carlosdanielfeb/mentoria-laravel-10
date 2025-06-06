{{-- extends da index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuários</h1>
    </div>

    <form action="{{ route('usuario.index') }}" method="get" class="mb-3">
        <input type="text" name="pesquisar" placeholder="Digite o nome" value="{{ request('pesquisar') }}" />
        <button type="submit" class="btn btn-primary">Pesquisar</button>

        <a href="{{ route('cadastrar.usuario') }}" class="btn btn-success float-end">
            Incluir Usuário
        </a>
    </form>

    <div class="table-responsive mt-4">
        @if ($findUsuario->isEmpty())
            <p>Não existem dados.</p>
        @else
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($findUsuario as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <a href="{{ route('atualizar.usuario', $usuario->id) }}" class="btn btn-light btn-sm">
                                    Editar
                                </a>

                                <meta name='csrf-token' content="{{ csrf_token() }}" />
                                <a onclick="deleteRegistroPaginacao('{{ route('usuario.delete') }}', {{ $usuario->id }})"
                                    class="btn btn-danger btn-sm">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
