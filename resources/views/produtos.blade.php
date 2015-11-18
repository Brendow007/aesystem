@extends('app')

@section('title')
Lista de produtos
@endsection

@section('content')

    <body class="alert-success">

<div class="container" bgcolor="#f0f8ff" align="center">



        <div class="col-lg-10 col-lg-offset-1">
<br>


                <b class="icon-large icon-fast-food alert-info"></b>
                <a class="btn btn-lg btn-material-deeppurple waves-effect" href="http://localhost:8000/lista-produtos1">  Comidas</a>
                <b class="icon-large icon-beer alert-info"></b>
                <a class="btn btn-lg btn-material-deeppurple waves-effect" href="http://localhost:8000/lista-produtos2"> Bebidas</a>
                <b class="icon-large icon-cake"></b>
                <a class="btn btn-lg btn-material-deeppurple waves-effect " href="http://localhost:8000/lista-produtos3">  Sobremesas</a>
                <b class="icon-large icon-drink"></b>
                <a class="btn btn-lg btn-material-deeppurple waves-effect" href="http://localhost:8000/lista-produtos4"> Drinks</a>
                <b class="icon-large icon-pizza"></b>
                <a class="btn btn-lg btn-material-deeppurple waves-effect" href="http://localhost:8000/lista-produtos5"> Combos</a>



            @if($produtos != null)


                <table class="table">
                <thead>
                <tr class="btn-info">

                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Preço</th>
                    <th>Disponibilidade</th>
                    <th>Comprar</th>

                </tr>
                </thead>
                <tbody>

                @foreach($produtos as $produto)

                <tr bgcolor="#f0f8ff">
                    <td><a href="{{route('produtos.show', ['id' => $produto->id])}}">{{$produto->nome}}</a></td>
                    <td>{{$produto->tipo}}</td>
                    <td>R$ {{$produto->preco}}</td>
                    {{-- operador ternario com php logo abaixo--}}

                    @if($produto->disponibilidade == "1")<td class="alert-success">{{($produto->disponibilidade) ? "Disponível" : "Indisponível"}}</td>
                    @else <td class="alert-danger">{{($produto->disponibilidade) ? "Disponível" : "Indisponível"}}</td>
                    @endif

                    <td>
                        @if($produto->disponibilidade == "1")
                        <a href="{{route('carrinho.comprar', ['id' => $produto->id])}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-"></i> Comprar</a>
                         @else
                            <button class="btn btn-success" disabled="disabled"><i class="glyphicon glyphicon-plus-"></i> Comprar</button>
                        @endif
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            @else
            <div class="alert alert-danger">Desculpe! Nenhum produto encontrado!</div>
            @endif


        </div>
    </div>
</div>

    </body>
@endsection