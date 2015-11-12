@extends('app')

@section('title')
Controle de Usuarios
    @endsection
@section('content')


@if(Auth::user()->perfil == null)


<div class="container" align="center">
    <h1 align="center" class="glyphicon glyphicon-user">Usuários</h1>
    <table class="table table-striped table-bordered table-hover">


            <thead class="alert alert-info">
            <tr>

                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>Editar</th>

            </tr>
            </thead>
            <tbody>

         @foreach ($users as $u)

            <tr>

                <td> {{$u-> id   }} </td>
                <td> {{$u-> name }} </td>
                <td> {{$u-> email}} </td>

                <td>
                    <a class="btn btn-success" href="/users/detalhar/{{$u->id}}">
                        Detalhar
                    </a>

                    <a href="{{action('UserController@deletar', $u->id)}}">
                        <span class="glyphicon glyphicon-trash"></span>
                        Deletar
                    </a>

                </td>

            </tr>

        @endforeach

    @else <h1 align="center" class="alert alert-danger">Você não tem Permissão para esta área</h1>

            </table>
        </div>
    @endif
@endsection
