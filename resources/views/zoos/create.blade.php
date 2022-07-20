@extends('template.users')
@section('title', 'Novo Animal')
@section('body')

<h1>Novo Animal</h1>

@if($errors->any())
  <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        {{ $error }}<br>
      @endforeach
    
  </div>
@endif
<form action="{{ route('zoos.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>  
    <input type="name" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="specie" class="form-label">Espécie</label>  
    <input type="text" class="form-control" id="specie" name="specie">
  </div>
  <div class="mb-3">
    <label for="family" class="form-label">Família</label>  
    <input type="text" class="form-control" id="family" name="family">
  </div>
  <div class="mb-3">
    <label for="weight" class="form-label">Peso</label>  
    <input type="text" class="form-control" id="weight" name="weight">
  </div>
  <div class="mb-3">
    <label for="height" class="form-label">Altura</label>  
    <input type="text" class="form-control" id="height" name="height">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Selecione uma imagem</label>
    <input type="file" class="form-control form-control-md" id="image" name="image" />
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection