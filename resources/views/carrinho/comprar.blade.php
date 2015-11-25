@extends('app')

@section('title')
    Produto {{$produto->nome}}
@endsection

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-lg-offset-3">

                <div class="panel panel-primary">

                    <div class="panel-heading panel-title text-center">Detalhes do produto</div>

                    <div class="panel-body">
                        <h3>{{$produto->nome}}</h3>
                        <hr/>

                        <b>Descrição:</b> {{$produto->descricao}}<br><br>

                        <b>Preço:</b> R$ {{$produto->preco}}<br>
                            <form action="{{route('carrinho.adiciona')}}" method="post" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <input type="hidden" name="id" value="{{$produto->id}}">



                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-5 control-label" for="quantidade">Quantidade</label>
                                    <div class="col-md-4">
                                        <input id="quantidade" name="quantidade" type="number" min="1" required oninvalid="setCustomValidity('Por favor,Coloque a Quantidade')"
                                               onchange="try{setCustomValidity('')}catch(e){}" value="{{old('quantidade')}}" placeholder="" class="form-control input-md">
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for=""></label>
                                    <div class="col-md-4">
                                        <button  type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Adicionar ao pedido!</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection