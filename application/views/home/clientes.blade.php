@extends('template/padrao')

{{-- Titulo da pagina --}}
@section('title', 'Clientes')

{{-- Sessao content do site --}}
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td><a href="{{base_url('/cliente/').$cliente->id}}">{{$cliente->id}}</a></td>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->cidade->nome}}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="{{base_url('/cliente/').$cliente->id}}">
                                <i class="material-icons">find_in_page</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Sessao content do site --}}
@endsection
