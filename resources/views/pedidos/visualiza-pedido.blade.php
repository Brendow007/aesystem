@extends('app')

@section('title')
    Pedido {{$pedido->id}}
@endsection

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <div class="panel panel-primary">

                    <div class=" panel-heading panel-title text-center">Pedido {{$pedido->id}}</div>

                    <div class="panel-body">

                        <table class="table table-bordered">

                            <tr>
                                <th>ID</th>
                                <th>{{$pedido->id}}</th>
                            </tr>

                            <tr class="progress-bar-danger white-text">
                                <th>Mesa:</th>
                                <th>{{$pedido->mesa}}</th>
                            </tr>

                            <tr>
                                <th>Total a pagar:</th>
                                <th>R$ {{$pedido->total}}</th>
                            </tr>

                            <tr>
                                <th>Hora:</th>
                                <th>{{date_format($pedido->created_at, 'H:i')}}</th>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <div class="col-md-8">

                <div class="panel panel-primary">

                    <div class="panel-heading panel-title text-center">Descrição do Pedido</div>

                    <div class="table-responsive">
                        <div class="panel-body">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr class="primary-color white-text">
                                    <th >Nome</th>
                                    <th>Preço por item</th>
                                    <th>Quantidade</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pedido->itens as $item)
                                    <tr>
                                        <td><b>{{$item->nome}}</b></td>
                                        <td><b>R${{ $item->preco}}</b></td>
                                        <td><b>{{$item->quantidade}}</b></td>

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