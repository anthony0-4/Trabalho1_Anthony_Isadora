
@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Livros')
@php
    if (!empty($dado->id)) {
        $route = route('livros.update', $dado->id);
    } else {
        $route = route('livros.store');
    }
@endphp

<h3>Formulário de Livros</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Titulo</label><br>
    <input type="text" name="titulo" class="form-control"
        value="@if (!empty($dado->titulo)) {{ $dado->titulo }}@elseif (!empty(old('titulo'))){{ old('titulo') }}@else{{ '' }} @endif"><br>

    <label for="">Autor</label><br>
    <input type="text" name="autor" class="form-control"
        value="@if (!empty($dado->autor)) {{ $dado->autor }}@elseif (!empty(old('autor'))){{ old('autor') }}@else{{ '' }} @endif"><br>

    <label for="">paginas</label><br>
    <input type="text" name="paginas" class="form-control"
        value="@if (!empty($dado->paginas)) {{ $dado->paginas }}@elseif (!empty(old('paginas'))){{ old('paginas') }}@else{{ '' }} @endif"><br>

        <label for="">Avaliação</label><br>
    <select name="estrelas_id" class="form-select">
        @foreach ($estrelas as $item)
            <option value="{{ $item->id }}">{{ $item->estrelas }}</option>
        @endforeach
    </select><br>

    <button type="submit" class="btn btn-outline-success">Salvar</button>
    <a href="{{ url('livros') }}" class="btn btn-outline-warning">Voltar</a>
</form>

@stop
