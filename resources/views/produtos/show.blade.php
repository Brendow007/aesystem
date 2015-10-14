@extends('app')


@section('title')
    Detalhes do produto {{$produto->nome}}
@endsection

@section('content')


    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-lg-offset-3">

                <div class="panel panel-primary alert-info">

                    <div class="panel-heading panel-title text-center">{{$produto->nome}}</div>


                    <div class="panel-body">

                        <table class=" alert-in table table-bordered">
                            <tr>
                                <th>Nome</th>
                                <td>{{$produto->nome}}</td>
                            </tr>
                            <tr>
                                <th>Tipo</th>
                                <td>{{$produto->tipo}}</td>
                            </tr>
                            <tr>
                                <th>Preco</th>
                                <td>R$ {{$produto->preco}}</td>
                            </tr>
                            <tr>
                                <th>Disponibilidade</th>

                                @if($produto->disponibilidade == "1")

                                    <td class="alert-success">{{($produto->disponibilidade) ? "Disponível" : "Indisponível"}}</td>

                                @else<td class="alert-danger">{{($produto->disponibilidade) ? "Disponível" : "Indisponível"}}</td>

                                @endif

                            </tr>
                            <tr>
                                <th>Quantidade</th>
                                <td>{{$produto->quantidade}}</td>
                            </tr><tr>
                                <th>Descrição</th>
                                <td>{{$produto->descricao}}</td>
                            </tr>
                        </table>

                    </div>


                    <div class="alert-info panel-footer"></div>

                </div>

            </div>

        </div>

    </div>

@endsection