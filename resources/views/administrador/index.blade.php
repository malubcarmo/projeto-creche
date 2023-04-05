
@extends('adminlte::page')

@section('content')

        <div class="container">
    <a class="btn btn-success btn-lg btn-block rounded-0" href="{{ url('admistrador/create') }}">Criar</a>

    <table class="table table-striped table-dark">
        <tr>
            <th>Categoria</th>
            <th>Nome</th>
            <th colspan="3">Ação</th>
        </tr>
        
        <tr>
            <td colspan="5">
                <a class="btn btn-secondary btn-lg btn-block rounded-0" href="{{ url('categoria/') }}">Editar Categorias</a>
            </td>
        </tr>
    </table>
</div>

@endsection