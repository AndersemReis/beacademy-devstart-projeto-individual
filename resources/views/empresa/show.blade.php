@extends('adminlte::page')

@section('title', 'Detalhes')

@section('content_header')
<h1>Detalhes do {{ $empresa->type }} - {{ $empresa->name }}</h1>
<li class="breadcrumb-item">
    <a href="{{ route('empresas.index') }}?type={{ $empresa->type }}">Listagem de {{ $empresa->type }}</a>
</li>
@stop

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-globe"></i>{{ $empresa->name}}
                            </h4>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <strong>Razão Social</strong>: {{ $empresa->enterprise }}<br>
                            <strong>CPF/CNPJ</strong>: {{ $empresa->document }}<br>
                            <strong>IE/RG</strong>: {{ $empresa->ie_rg }}<br>
                            <strong>Observação</strong>: {{ $empresa->observation }}<br>
                        </div>
                        <div class="col-sm-6">
                            <address>
                                {{ $empresa->address }}, {{ $empresa->quarter}}<br>
                                {{ $empresa->city }} - {{ $empresa->state }} - {{ $empresa->cep }} <br>
                                Nome do Contato: {{ $empresa->contact_name }}
                                Celular: {{ $empresa->cel_phone }}
                                Email: {{ $empresa->email }}
                                Telefone: {{ $empresa->phone }}
                            </address>

                        </div>

                    </div>
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