@extends('adminlte::page')

@section('title', 'Listagem')

@section('content_header')

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Listagem de Produtos</h3></div>
                    <div class="card-body">
                        <a href="{{ url('/produtos/create') }}" class="btn btn-success btn-sm" title="Add New Produto">
                            <i class="fa fa-plus" aria-hidden="true"></i> Novo Produto
                        </a>

                        <form method="GET" action="{{ url('/produtos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nome</th><th>Descrição</th><th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($produtos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nome }}</td><td>{{ $item->descrição }}</td>
                                        <td>
                                            <a href="{{ url('/produtos/' . $item->id) }}" title="View Produto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Detalhes</button></a>
                                            <a href="{{ url('/produtos/' . $item->id . '/edit') }}" title="Edit Produto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Atualizar</button></a>

                                            <form method="POST" action="{{ url('/produtos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Produto" onclick="return confirm(&quot;Confirmar Exclusão?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $produtos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
