@extends('layout')

@section('title', 'Listagem')

@section('content')
    <h1>Listagem de Produtos</h1>
    @if(old('nome'))
        <div class="alert alert-success">
            Produto {{ old('nome') }} adicionado com sucesso!
        </div>
    @endif
    @if(!$produtos->isEmpty())
        <table class="table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Peso</th>
                <th>Quantidade</th>
                <th colspan="2" class="text-center">Opções</th>
            </tr>
            </thead>
            @foreach($produtos as $p)
                <tbody>
                <tr>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->valor }}</td>
                    <td>{{ $p->descricao }}</td>
                    <td>{{ $p->categoria->nome }}</td>
                    <td>{{ $p->peso }}</td>
                    <td>{{ $p->quantidade }}</td>
                    <td>
                        <a href="{{ route('produto.mostra', $p->id) }}">Ver</a>
                    </td>
                    <td>
                        <a href="{{ route('produto.remove', $p->id) }}">Remover</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
            {{$produtos->links()}}
        </table>
    @else
        <div class="alert alert-danger">
            <p class="text-center">Não existe produtos para listar!</p>
        </div>
    @endif
@stop