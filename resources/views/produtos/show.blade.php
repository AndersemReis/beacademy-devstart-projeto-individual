@extends('adminlte::page')

@section('title', 'Listagem')

@section('content_header')

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h>Detalhes do Produto {{ $produto->id }}</h3></div>
                    <div class="card-body">

                        <a href="{{ url('/produtos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/produtos/' . $produto->id . '/edit') }}" title="Edit Produto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Atualizar</button></a>

                        <form method="POST" action="{{ url('produtos' . '/' . $produto->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Produto" onclick="return confirm(&quot;Confirma Exclusão?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $produto->id }}</td>
                                    </tr>
                                    <tr><th> Nome </th><td> {{ $produto->nome }} </td></tr><tr><th> Descrição </th><td> {{ $produto->descrição }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
