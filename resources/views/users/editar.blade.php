@extends('app')

@section('title')
    Controle de Usuarios
@endsection

@section('content')




        <div class="container">

                     <div class="row">

                             <div class="col-md-6 col-md-offset-3">

                                 <div class="page-header">

                                     <h4 class="text-info" align="center">Editando o usuário:  {{$users->name}}</h4>

                                 </div>

                                    <table class="table table-striped table-bordered table-hover">


                <form class="form-horizontal" role="form" method="post" action="{{route('users.update', ['id' => $users->id])}}">

                    <!--campo necessario para seguranca da aplicacao contra csrf-->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    {{--necessario para que seja enviado o verbo http esperado pela acao "update"--}}
                    <input type="hidden" name="_method" value="PUT"/>

                    <div class="form-group">

                        <label class="col-md-4 control-label text-info">Nome</label>

                        <div class="col-md-6">

                            <input type="text" class="form-control text-info" name="name" required oninvalid="setCustomValidity('Por favor,coloque o nome')"onchange="try{setCustomValidity('')}catch(e){}" value="{{$users->name}}">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-4 control-label text-info">Email</label>

                        <div class="col-md-6">

                            <input type="text" class="form-control" name="email" required oninvalid="setCustomValidity('Por favor,coloque o email')"onchange="try{setCustomValidity('')}catch(e){}"value="{{$users->email}}">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-4 control-label text-info">Telefone</label>

                        <div class="col-md-6">

                            <input type="text" class="form-control" name="telefone" required oninvalid="setCustomValidity('Por favor,coloque o telefone')"onchange="try{setCustomValidity('')}catch(e){}" value="{{$users->telefone}}">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-4 control-label text-info">CPF</label>

                        <div class="col-md-6">

                            <input type="text" class="form-control" name="cpf" required oninvalid="setCustomValidity('Por favor,coloque o cpf')"onchange="try{setCustomValidity('')}catch(e){}" value="{{$users->cpf}}">

                        </div>

                    </div>


                    <div class="form-group">

                        <label class="col-md-4 control-label text-info">Endereço</label>

                        <div class="col-md-6">

                            <input type="text" class="form-control" name="endereco" required oninvalid="setCustomValidity('Por favor,coloque o endereço')"onchange="try{setCustomValidity('')}catch(e){}" value="{{ $users->endereco}}">

                        </div>

                    </div>


                    <div class="form-group">

                        <label class="col-md-4 control-label text-info">Perfil </label>

                            <div class="col-md-6">

                            <select name="perfil" class="form-control" {{ old('perfil') }}>

                                <option value="Administrador">Administrador</option>

                                <option value="Gerente">Gerente</option>

                                <option value="Funcionario">Funcionario</option>

                                <option value="Cliente">Cliente</option>

                            </select>

                        </div>

                    </div>
                                 <div class="form-group">

                                     <div class="col-md-6 col-md-offset-4">

                                         <br>

                                         <br>

                                         <button type="submit" class="btn btn-info">
                                             Atualizar Dados!
                                         </button>

                                     </div>

                                 </div>
                </form>

         </table>

            </table>


                        </div>
                </div>
        </div>

<br>
<br>
<br>


@endsection
