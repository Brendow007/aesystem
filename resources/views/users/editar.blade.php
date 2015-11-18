@extends('app')

@section('title')
    Controle de Usuarios
@endsection

@section('content')




        <div class="container">
            <table class="table table-striped table-bordered table-hover">




                    <td>
                        {{$users->id}}
                    </td>

                    <td>
                        {{$users->name}}
                    </td>

                    <td>
                        {{$users->email}}

                    </td>


                <form class="form-horizontal" role="form" method="PUT" action="{{route('users/edit', ['id' => $users->id])}}">

                    <!--campo necessario para seguranca da aplicacao contra csrf-->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{--necessario para que seja enviado o verbo http esperado pela acao "update"--}}
                    <input type="hidden" name="_method" value="PUT"/>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nome</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nome" value="{{ $users->name }}">
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-4 control-label">Perfil </label>
                        <div class="col-md-6">


                            <select name="tipo" class="form-control" {{ old('perfil') }}>
                                <option value="Comida">Administrador</option>
                                <option value="Bebida">Funcionario</option>
                            </select>

                        </div>
                    </div>

                </form>




            </table>

            <a class="btn btn-info" href="/users/listar">Atualizar Dados!</a>

            </table>
        </div>

        <br>
        <br>
        <br>


@endsection
