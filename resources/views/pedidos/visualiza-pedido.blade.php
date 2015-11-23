@extends('app')

@section('title')
    Pedido {{$pedido->id}}
@endsection

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <div class="panel panel-primary">

                    <div class="panel-heading panel-title text-center">Pedido {{$pedido->id}}</div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <tr>
                                <th>Pedido</th>
                                <th>{{$pedido->id}}</th>
                            </tr>
                            <tr>
                                <th>Pedido</th>
                                <th>{{$pedido->mesa}}</th>
                            </tr>
                            <tr>
                                <th>Pedido</th>
                                <th>{{$pedido->total}}</th>
                            </tr>
                            <tr>
                                <th>Pedido</th>
                                <th>{{date_format($pedido->created_at, 'H:i')}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-8">

                <div class="panel panel-default">

                    <div class="panel-heading panel-title text-center">Lista dos ultimos pedidos</div>

                    <div class="table-responsive">
                        <div class="panel-body">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pedido->itens as $item)
                                    <tr>
                                        <td>{{$item->nome}}</td>
                                        <td>{{$item->preco}}</td>
                                        <td>{{$item->quantidade}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection