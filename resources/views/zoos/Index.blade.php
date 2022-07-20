@extends('template.users')
@section('title', 'Listagem dos Animais')
@section('body')

<h1>Listagem dos Animais</h1>


<div class="containder">
    <div class="row">
        <div class="col-sm mt-2 mb-5">
            <a href="{{ route('zoos.create') }}" class="btn btn-outline-dark">Novo Animal</a>
        </div>
        <div class="col-sm mt-2 mb-5">
            <form action="{{ route('zoos.index') }}" method="GET">
                <div class="input-group">
                    <input type="search" class="form-control rounded" name="search" />
                    <button type="submit" class="btn btn-outline-prymary">Pesquisar</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
        <th scope="col">Foto</th>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Espécie</th>
        <th scope="col">Família</th>
        <th scope="col">Idade</th>
        <th scope="col">Peso</th>
        <th scope="col">Altura</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
            @foreach($zoos as $zoo)
            <tr>
                @if ($zoo->image)
                <th><img src=" {{ asset('storage/'.$zoo->image) }} " width="50px" weigth="50px" class="rounded-circle"/></th>
                @else
                <th><img src=" {{ asset('storage/profile/zoo.jpg') }} " width="50px" weigth="50px" class="rounded-circle"/></th>
                @endif
                <th scope="row">{{ $zoo->id }}</th>
                <td>{{ $zoo->name }}</td>
                <td>{{ $zoo->specie }}</td>
                <td>{{ $zoo->family }}</td>
                <td>{{ $zoo->age }}</td>
                <td>{{ $zoo->weight }}</td>
                <td>{{ $zoo->height }}</td>
                <td><a href="#" class="btn btn-primary text-white">Visualizar</a></td>
            </tr>
            
        @endforeach
    </tbody>
</table>
<div class="justify-content-center pagination">
    {{ $zoos->links('pagination::bootstrap-4') }}
</div>

@endsection