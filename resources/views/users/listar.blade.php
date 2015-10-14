@extends('app')

@section('title')
Controle de Usuarios
    @endsection
@section('content')


@if(Auth::user()->name == "Brendow")


<div class="container">
    <h1 align="center" class="btn-info">Usuários</h1>
    <table class="table table-striped table-bordered table-hover">


            <thead class="btn-warning alert-warning">
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

                    <a class="btn btn-danger" href="/users/editar">
                        Editar
                    </a>

                </td>

            </tr>

        @endforeach

    @else <h1 align="center" class="alert alert-danger">Você não tem Permissão para esta área</h1>

            </table>
        </div>
    @endif
@endsection
