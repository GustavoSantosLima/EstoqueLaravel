@extends('layout')

@section('title', 'Novo')

@section('content')

    <h2>Adicionado Produto</h2>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produto.adiciona') }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" value="{{ old('valor') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" name="quantidade" value="{{ old('quantidade') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="peso">Peso</label>
            <input type="text" name="peso" value="{{ old('peso') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name="categoria_id" class="form-control">
                @foreach($categorias as $c)
                    <option value="{{ $c->id }}">{{ $c->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="{{ old('descricao') }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

@endsection