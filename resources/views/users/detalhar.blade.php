@extends('app')

@section('content')

    <title>Controle de estoque</title>

    <div class="container">
        <h2 align="center" class="btn-info"> Detalhes do Usuário</h2>
        <table class="table table-striped table-bordered table-hover">
                <thead class="btn-warning alert-warning">
                <tr>

                    <th>PERFIL</th>
                    <th>CPF</th>
                    <th>TELEFONE</th>
                    <th>ENDEREÇO</th>

                </tr>
                </thead>
                <tbody>

        @foreach($pessoas as $p)

        <tr>
                <td>
                   {{$p->perfil}}
                </td>

                <td>
                   {{$p->cpf}}
                </td>

                <td>
                   {{$p->telefone}}
                </td>

                <td>
                   {{$p->endereco}}
                </td>
        </tr>


        @endforeach

            <thead class="btn-success alert-success">

                <tr>

                    <th>ID</th>
                    <th>USUÁRIO</th>
                    <th>EMAIL</th>

                </tr>
            </thead>
            <tbody>




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

   @endforeach
    </div>
@stop