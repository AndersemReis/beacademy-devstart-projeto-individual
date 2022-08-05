@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')

@stop

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Entre com os dados do {{ $type }}</h3>
                        
                </div>
                <div class="card-body">
                    <form action="{{ route('empresas.store') }}" method="post">
                        <input type="hidden" name="type" value="{{ $type }}">
                        @include('empresa.form')
                    </form>
                    
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