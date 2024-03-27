@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de livros')

<h3>Listagem de Livraria</h3>

<form action="{{ route('livraria.search') }}" method="post">

    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Nome</label><br>
            <input type="text" name="titulo" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="button" class="btn btn-outline-danger"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('livraria/create') }}" class="btn btn-outline-warning"><i class="fa-solid fa-plus"></i> Novo</a>
        </div>
    </div>
</form>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>CNPJ</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ação</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->endereco }}</td>
                <td>{{ $item->cnpj }}</td>
                <td>{{ $item->cidade }}</td>
                <td>{{ $item->estados->estados ?? '' }}</td>
                <td><a href="{{ route('livraria.edit', $item->id) }} "class="btn btn-outline-primary" title="Editar"><i
                            class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('livraria.destroy', $item) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" title="Deletar"
                            onclick="return confirm('Deseja realmente deletar esse registro?')">
                            <i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
