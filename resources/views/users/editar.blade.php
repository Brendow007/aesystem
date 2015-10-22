@extends('app')

@section('title')
    Controle de Usuarios
@endsection

@section('content')




        <div class="container">
            <table class="table table-striped table-bordered table-hover">


                @foreach ($users as $u)


                    <td>
                        {{$u->id}}
                    </td>

                    <td>
                        {{$u->name}}
                    </td>

                    <td>
                        {{$u->email}}
                    </td>






            </table>
            <a class="btn btn-info" href="/users/listar">Voltar</a>
            <a class="btn btn-danger" href="/users/Editar">Editar</a>

            </table>
        </div>

        <br>
        <br>
        <br>

    <form action="{{['id' => $users->id]}}" method="post">
        <input type="hidden" name="_method" value="DELETE"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="submit" value="Remover produto" class="btn btn-danger">
    </form>


@endsection
