@extends('adminlte::page')

@section('title', 'Edição')

@section('content_header')

@section('plugins.PluginName', true)

@stop

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar dados - {{ $empresa->name }}</h3>
                        
                </div>
                <div class="card-body">
                    <form action="{{ route('empresas.update',$empresa) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
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