
@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Categorias de Livros')
@php
    if (!empty($dado->id)) {
        $route = route('categoria.update', $dado->id);
    } else {
        $route = route('categoria.store');
    }
@endphp

<h3>Formulário de Categorias de Livros</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Categoria</label><br>
    <input type="text" name="categoria" class="form-control"
        value="@if (!empty($dado->categoria)) {{ $dado->categoria }}@elseif (!empty(old('categoria'))){{ old('categoria') }}@else{{ '' }} @endif"><br>

    <label for="">genero</label><br>
    <input type="text" name="genero" class="form-control"
        value="@if (!empty($dado->genero)) {{ $dado->genero }}@elseif (!empty(old('genero'))){{ old('genero') }}@else{{ '' }} @endif"><br>

    <label for="">lancamento</label><br>
    <input type="text" name="lancamento" class="form-control"
        value="@if (!empty($dado->lancamento)) {{ $dado->lancamento }}@elseif (!empty(old('lancamento'))){{ old('lancamento') }}@else{{ '' }} @endif"><br>


        <button type="submit" class="btn btn-outline-success">Salvar</button>
    <a href="{{ url('categoria') }}" class="btn btn-outline-warning">Voltar</a>
</form>

@stop
