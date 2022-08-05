@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<h1>Novo Usuário</h1>

@if($errors->any())
  <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        {{ $error }}<br>
      @endforeach
    
  </div>
@endif
<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>  
    <input type="name" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>  
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Senha</label>  
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Selecione uma imagem</label>
    <input type="file" class="form-control form-control-md" id="image" name="image" />
  </div>
  @if(Auth::user()->is_admin == 1 )
  <div class="form-check mb-5">
    <input class="form-check-input" type="checkbox" value="1" id="admin" name="admin">
    <label class="form-check-label" for="flexCheckDefault">
      Administrador
    </label>
  </div>
  @endif
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop