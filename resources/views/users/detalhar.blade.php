@extends('app')

@section('content')

    <title>Controle de estoque</title>

    <div class="container">
        <h3 align="center" class="primary-color white-text"> Detalhes do Usuário</h3>
        <table class="table table-striped table-bordered table-hover">



            <thead class="alert-info">

                <tr>

                    <th>ID</th>
                    <th>USUÁRIO</th>
                    <th>EMAIL</th>
                    <th>PERFIL</th>
                    <th>ENDERECO</th>
                    <th>TELEFONE</th>
                    <th>CPF</th>

                </tr>
            </thead>

            </tbody>




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

<td>
   {{$u->perfil}}
</td>

<td>
   {{$u->endereco}}
</td>

<td>
   {{$u->telefone}}
</td>

<td>
   {{$u->cpf}}
</td>






        </table>
                <a class="btn btn-info" href="/users/listar">Voltar</a>
                <a class="btn btn-success" href="/users/editar/{id} {{$u->id}}">Editar </a>

        @endforeach
    </div>
@stop