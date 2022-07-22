@extends('template.users')
@section('title', $title)
@section('body')

<h1>Animal - {{ $zoo->name }}</h1>
<table class="table">
    <thead class="text-center">
        <tr>
        <th scope="col">Foto</th>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Espécie</th>
        <th scope="col">Família</th>
        <th scope="col">Editar</th>
        <th scope="col">Deletar</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr>
            <@if ($zoo->image)
                <th><img src=" {{ asset('storage/'.$zoo->image) }} " width="50px" weigth="50px" class="rounded-circle"/></th>
                @else
                <th><img src=" {{ asset('storage/profile/zoo.jpg') }} " width="50px" weigth="50px" class="rounded-circle"/></th>
                @endif
                <th scope="row">{{ $zoo->id }}</th>
                <td>{{ $zoo->name }}</td>
                <td>{{ $zoo->species }}</td>
                <td>{{ $zoo->family }}</td>
            <td>
                <a href="{{ route('zoos.edit', $zoo->id) }}" class="btn btn-warning text-white">Editar</a>
            </td>>
            <td>
                <form action="#" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger text-white">Deletar</button>
                </form>
        </td>
        </tr>
            
        
    </tbody>
</table>
@endsection