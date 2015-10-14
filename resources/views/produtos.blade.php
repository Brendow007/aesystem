@extends('app')

@section('title')
Lista de produtos
@endsection

@section('content')
<div class="container" bgcolor="#f0f8ff">

    <div class="row">

        <div class="col-lg-8 col-lg-offset-2">

            <a href="{{route('produtos.create')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Novo produto</a>

            <br/>
            <br>
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
                        <a href="{{route('carrinho.comprar', ['id' => $produto->id])}}" class="btn btn-large btn-primary"><i class="glyphicon glyphicon-shopping-cart-"></i> Comprar</a>
                         @else
                            <button class="btn btn-large btn-primary" disabled="disabled"><i class="glyphicon glyphicon-shopping-cart-"></i> Comprar</button>
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
@endsection