@extends('template.users')
@section('title', 'Editar Animal')
@section('body')

<h1>Editar {{ $zoo->name }}</h1>

@if($errors->any())
  <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        {{ $error }}<br>
      @endforeach
    
  </div>
@endif
<form action="{{ route('zoos.update', $zoo->id) }}" method="post" enctype="multipart/form-data">
@method('PUT')  
@csrf

  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>  
    <input type="name" class="form-control" id="name" name="name" value="{{ $zoo->name }}">
  </div>
  <div class="mb-3">
    <label for="species" class="form-label">Espécie</label>  
    <input type="text" class="form-control" id="species" name="species" value="{{ $zoo->species }}">
  </div>
  <div class="mb-3">
    <label for="family" class="form-label">Família</label>  
    <input type="text" class="form-control" id="family" name="family" value="{{ $zoo->family }}">
  </div>
  <div class="mb-3">
    <label for="sex" class="form-label">Sexo</label>  
    <input type="text" class="form-control" id="sex" name="sex" value="{{ $zoo->sex }}">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Idade</label>  
    <input type="text" class="form-control" id="age" name="age" value="{{ $zoo->age }}">
  </div>
  <div class="mb-3">
    <label for="weight" class="form-label">Peso</label>  
    <input type="text" class="form-control" id="weight" name="weight" value="{{ $zoo->weight }}">
  </div>
  <div class="mb-3">
    <label for="height" class="form-label">Altura</label>  
    <input type="text" class="form-control" id="height" name="height" value="{{ $zoo->height }}">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Selecione uma imagem</label>
    <input type="file" class="form-control form-control-md" id="image" name="image" />
  </div>

  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection