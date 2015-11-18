@extends('app')

@section('title')
    Meu carrinho.
@endsection


@section('content')

    <div class="container" >


        <div align="center"  class="page-header">

            <h4 align="center" class="text-info glyphicon glyphicon-shopping-cart">Meu Pedido</h4>

        <aside><a type="submit"  class="alert btn btn btn-large btn-success">Finalizar pedido <b class="glyphicon glyphicon-arrow-right"></b></a></aside>

        </div>

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">

                <a href="{{route('listaprodutos1')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Quero pedir mais!</a>
                <br/>
                <br/>

                <span class="pull-right">Total de itens no carrinho: <strong> {{$totalItens}}</strong> - Valor total: <strong> R$ {{$total}}</strong></span>

                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>

                            <tr class="btn-warning">

                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Total item (R$)</th>
                                <th>Remover</th>

                            </tr>

                        </thead>

                        <tbody>


                            @foreach($itens as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->subtotal}}</td>
                                    <td>
                                        <form method="post" action="{{route('carrinho.remove')}}">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <input type="hidden" name="_method" value="DELETE"/>
                                            <input type="hidden" name="rowid" value="{{$item->rowid}}"/>

                                            <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> remover</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <form action="{{route('carrinho.limpar')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                        <button type="submit" class="btn btn-large btn-danger">Cancelar pedido</button>
                    </form>
                </div>

            </div>
        </div>

    </div>

@endsection