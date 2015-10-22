@extends('app')

@section('title')
    Cadastrar novo produto
@endsection

@section('content')


    <div class="container">

        @include('partials/mensagem-valida-produto')

        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div class="page-header">
                    <h2 align="center">Cadastrar novo produto</h2>
                </div>

                <form class="form-horizontal" role="form" method="POST" action="{{route('produtos.store')}}">

                    <!--campo necessario para seguranca da aplicacao contra csrf-->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">




                    <div class="form-group">
                        <label class="col-md-4 control-label">Nome</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nome" required value="{{ old('nome') }}">
                        </div>
                    </div>




                    <div class="form-group">
                        <label class="col-md-4 control-label">Tipo </label>
                        <div class="col-md-6">
                            <!-- depois voc muda para um campo select com os tipos de produtos -->
                            <select name="tipo" class="form-control" {{ old('tipo') }}>
                                <option value="Comida">Comida</option>
                                <option value="Bebida">Bebida</option>
                            </select>

                        </div>
                    </div>




                    <div class="form-group">
                        <label class="col-md-4 control-label">Quantidade </label>
                        <div class="col-md-6">
                            <!-- depois voc muda para um campo select com os tipos de produtos -->
                            <input type="number" class="form-control" name="quantidade" min="1" max="100000" required value="{{ old('quantidade') }}">
                        </div>
                    </div>




                    <div class="form-group">
                        <label class="col-md-4 control-label">Preco</label>
                        <div class="col-md-6">
                            <!-- depois voc muda para um campo select com os tipos de produtos -->
                            <input type="number" class="form-control" name="preco" step="0.01" min="1" max="10000.00" required value="{{ old('preco') }}">
                        </div>
                    </div>




                    <div class="form-group">
                        <label class="col-md-4 control-label">Disponivel</label>
                        <div class="col-md-6">
                            <select name="disponibilidade" class="form-control" required {{ old('disponibilidade') }}>
                                <option value="1">Disponível</option>
                                <option value="0">Indisponível</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-4 control-label">Descricao</label>
                        <div class="col-md-6">
                           <textarea name="descricao" placeholder="Descricao do produto" required class="form-control"></textarea>
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Registrar produto
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

@endsection