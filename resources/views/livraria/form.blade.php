@extends('base')
@section('conteudo')
@section('nome', 'Formulário de Livrarias')
@php
    if (!empty($dado->id)) {
        $route = route('livraria.update', $dado->id);
    } else {
        $route = route('livraria.store');
    }
@endphp

<h3>Formulário de Livrarias</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Nome</label><br>
    <input type="text" name="nome" class="form-control"
        value="@if (!empty($dado->nome)) {{ $dado->nome }}@elseif (!empty(old('nome'))){{ old('nome') }}@else{{ '' }} @endif"><br>

    <label for="">Endereco</label><br>
    <input type="text" name="endereco" class="form-control"
        value="@if (!empty($dado->endereco)) {{ $dado->endereco }}@elseif (!empty(old('endereco'))){{ old('endereco') }}@else{{ '' }} @endif"><br>

    <label for="">CNPJ</label><br>
    <input type="text" name="cnpj" class="form-control"
        value="@if (!empty($dado->cnpj)) {{ $dado->cnpj }}@elseif (!empty(old('cnpj'))){{ old('cnpj') }}@else{{ '' }} @endif"><br>

    <label for="">Cidade</label><br>
    <input type="text" name="cidade" class="form-control"
        value="@if (!empty($dado->cidade)) {{ $dado->cidade }}@elseif (!empty(old('cidade'))){{ old('cidade') }}@else{{ '' }} @endif"><br>

        <label for="">Estados</label><br>
    <select name="estados_id" class="form-select">
        @foreach ($estados as $item)
            <option value="{{ $item->id }}">{{ $item->estados }}</option>
        @endforeach
    </select><br>

    <button type="submit" class="btn btn-outline-success">Salvar</button>
    <a href="{{ url('livraria') }}" class="btn btn-outline-warning">Voltar</a>
</form>

@stop
