@extends('layout')

@section('title', 'Listagem')

@section('content')

    <h1>Detalhes do Produto {{ $produto->nome }}</h1>
    <ul>
        <li><b>Valor:</b> {{ $produto->valor }}</li>
        <li><b>Descrição:</b> {{ $produto->descricao }}</li>
        <li><b>Quantidade em Estoque:</b> {{ $produto->quantidade }}</li>
    </ul>

@stop