@extends('layout')

@section('title', 'Listagem')

@section('content')
    <h1>Listagem de Produtos <a href="/produtos/novo" class="btn btn-primary pull-right">Adicionar Produto</a></h1>
    @if(old('nome'))
        <div class="alert alert-success">
            Produto {{ old('nome') }} adicionado com sucesso!
        </div>
    @endif
    <table class="table">
        @foreach($produtos as $p)
        <tr>
            <td>{{ $p->nome }}</td>
            <td>{{ $p->valor }}</td>
            <td>{{ $p->descricao }}</td>
            <td>{{ $p->peso }}</td>
            <td>{{ $p->quantidade }}</td>
            <td>
                <a href="{{ action('ProdutoController@mostra', $p->id) }}">Ver</a>
            </td>
            <td>
                <a href="{{ action('ProdutoController@remove', $p->id) }}">Remover</a>
            </td>
        </tr>
        @endforeach
    </table>
@stop