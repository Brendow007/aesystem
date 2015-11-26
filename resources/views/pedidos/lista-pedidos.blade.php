@extends('app')

@section('title')
    Lista dos ultimos pedidos
@endsection

@section('content')
    <script language="javascript">
        print();</script>

    <div class="container" align="center">

        <h1 align="center" class="blue-text lightSpeedOut glyphicon glyphicon-time">Pedidos</h1>

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-primary">

                    <div class="panel-heading panel-title text-center">Lista dos ultimos pedidos</div>

                    <div class="table-responsive">

                        <div class="panel-body">

                            <table class="table table-bordered table-striped table-hover">

                                <thead>

                                    <tr class="primary-color white-text">

                                        <th>ID</th>
                                        <th>MESA</th>
                                        <th>TOTAL</th>
                                        <td><b>REGISTRADO</b></td>

                                    </tr>

                                </thead>

                                <tbody>
                                    @foreach($pedidos as $pedido)
                                        <tr>

                                            <td><a href="{{route('pedidos.visualiza', ['id' => $pedido->id])}}">{{$pedido->id}}</a></td>
                                            <td><b>{{$pedido->mesa}}</b></td>
                                            <td><b>R$ {{$pedido->total}}</b></td>
                                            <td>{{date_format($pedido->created_at, 'H:i')}}</td>

                                        </tr>

                                    @endforeach

                                </tbody>
                            </table>

                        </div>

                    </div>

                    <div class="panel-footer">

                        {!! $pedidos->render() !!}

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection