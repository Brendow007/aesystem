@extends('app')

@section('title')
    Editando o produto {{$produto->nome}}
@endsection

@section('content')

    <div class="container">

        @include('partials/mensagem-valida-produto')

        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div class="page-header">
                    <h3 align="center">Editando: {{$produto->nome}}</h3>
                </div>

                <form class="form-horizontal" role="form" method="POST" action="{{route('produtos.update', ['id' => $produto->id])}}">

                    <!--campo necessario para seguranca da aplicacao contra csrf-->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{--necessario para que seja enviado o verbo http esperado pela acao "update"--}}
                    <input type="hidden" name="_method" value="PUT"/>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nome</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nome" required oninvalid="setCustomValidity('Por favor,coloque o nome')" onchange="try{setCustomValidity('')}catch(e){}" value="{{ $produto->nome }}">
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-4 control-label">Tipo </label>
                        <div class="col-md-6">

                            <select name="tipo" class="form-control" {{ old('tipo') }}>
                                <option value="Comida">Comida</option>
                                <option value="Bebida">Bebida</option>
                                <option value="Sobremesa">Sobremesa</option>
                                <option value="Drink">Drink</option>
                                <option value="Combo">Combo</option>
                            </select>

                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-4 control-label">Preco</label>
                        <div class="col-md-6">
                            <!-- depois voc muda para um campo select com os tipos de produtos -->
                            <input type="number" class="form-control" name="preco" step="0.01" min="1" max="10000.00" required oninvalid="setCustomValidity('Por favor,coloque o preço')" onchange="try{setCustomValidity('')}catch(e){}" value="{{ $produto->preco }}">


                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-4 control-label">Disponivel</label>
                        <div class="col-md-6">
                            <select name="disponibilidade" class="form-control" }}>
                                <option value="1">Disponível</option>
                                <option value="0">Indisponível</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label">Quantidade</label>
                        <div class="col-md-6">
                            <!-- depois voc muda para um campo select com os tipos de produtos -->
                            <input type="number" class="form-control" name="quantidade" required oninvalid="setCustomValidity('Por favor,coloque a quantidade')" onchange="try{setCustomValidity('')}catch(e){}" value="{{ $produto->quantidade }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Descricao</label>
                        <div class="col-md-6">
                           <textarea name="descricao" placeholder="Descrição do produto" required oninvalid="setCustomValidity('Por favor,coloque a descrição')" onchange="try{setCustomValidity('')}catch(e){}" class="form-control">{{$produto->descricao}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Atualizar Produto!
                            </button>


                        </div>
                    </div>
                </form>

                <br/>
                <br/>

                <form action="{{route('produtos.destroy', ['id' => $produto->id])}}" method="post">
                    <input type="hidden" name="_method" value="DELETE"/>
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="submit" value="Remover produto" class="btn btn-danger">
                </form>

            </div>

        </div>

    </div>

@endsection