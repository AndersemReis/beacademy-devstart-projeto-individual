@extends('adminlte::page')

@section('title', 'Listagem')

@section('content_header')

@stop

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listagem de {{ $type }}</h3>
                    <div class="card-tools">
                        <a href="" class="btn btn-success">Novo {{ $type }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead> 
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nome Empresa</th>
                                <th>Nome Contato</th>
                                <th>Celular</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empresas as $empresa)
                                <tr>
                                    <td>{{ $empresa->id }}</td>
                                    <td>{{ $empresa->name }}</td>
                                    <td>{{ $empresa->name_contact }}</td>
                                    <td>{{ $empresa->cel_phone }}</td>
                                    <td><a href="" class="btn btn-primary">Detalhes</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $empresas->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop