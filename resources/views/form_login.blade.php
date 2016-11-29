@extends('layout')

@section('title', 'Login')

@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/login" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" value="{{ old('email') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" value="{{ old('password') }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

@endsection