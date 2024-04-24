@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de livros')
<div class="" style="margin-top: 22px; text-align: right;">
    <div class="" style="text-align: left; width:100px">
        <img src="{{asset('img/SUN BOOKS.png')}}" class="img-fluid rounded-start" width="200px">
    </div>
    <a class="navbar-brand" href="{{url('categoria')}}"><i class="fa-solid fa-bookmark"></i> Categorias</a><br>
    <a class="navbar-brand" href="{{url('livraria')}}"><i class="fa-solid fa-location-dot"></i> Livrarias</a><br>
    <a class="navbar-brand" href="{{url('livros')}}"><i class="fa-solid fa-book-open-reader"></i> Livros</a><br>
    <a class="navbar-brand" href="{{ url('') }}"><i class="fa-solid fa-house"></i> Inicio</a><br>
  </div>

<h3>Listagem de Livros</h3>

<form action="{{ route('livros.search') }}" method="post">

    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Titulos</label><br>
            <input type="text" name="titulo" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-binoculars"></i> Buscar</button>
            <a href="{{ url('livros/create') }}" class="btn btn-outline-warning"><i class="fa-solid fa-file"></i> Novo</a>
        </div>
    </div>
</form>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Páginas</th>
            <th>Avaliação</th>
            <th>Ação</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->titulo }}</td>
                <td>{{ $item->autor }}</td>
                <td>{{ $item->paginas }}</td>
                <td>{{ $item->estrelas->estrelas ?? '' }}</td>
                <td><a href="{{ route('livros.edit', $item->id) }} "class="btn btn-outline-primary" title="Editar"><i
                            class="fa-solid fa-pen-nib"></i></a></td>
                <td>
                    <form action="{{ route('livros.destroy', $item) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" title="Deletar"
                            onclick="return confirm('Deseja realmente deletar esse registro?')">
                            <i class="fa-solid fa-circle-xmark"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
