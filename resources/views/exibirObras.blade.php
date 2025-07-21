@extends('layout')
@section('content')
<div class="card border">

    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div><br />
    @elseif(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif

    <div class="card-body">
        <h5 class="card-title" style="text-align: center">Cadastro de Obras</h5>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Artista</th>
                    <th>Tipo</th>
                    <th>Estilo</th>
                    <th>Imagem</th>
                    <th>Data</th>
                    <th style="text-align:center" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nomeObra }}</td>
                    <td>{{ $item->artistaObra }}</td>
                    <td>{{ $item->tipoObra }}</td>
                    <td>{{ $item->estiloObra }}</td>
                    <td>{{ $item->imagemObra }}</td>
                    <td>{{ $item->dataObra }}</td>
                    <td style="text-align:center">
                        <a href="/obras/editar/{{ $item->id }}" class="btn btn-outline-primary">Editar</a>
                    </td>
                    <td style="text-align:center">
                        <a href="/obras/apagar/{{ $item->id }}" class="btn btn-outline-danger"
                           onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
