@extends('app');

@section('content')

    <div class="container">

        <div class="warning-color">

            <div class="col-md-6 col-md-offset-3">

                <div class="page-header">

                    <h4 align="center">Digite sua mesa atual:<b class="glyphicon glyphicon-arrow-down"></b></h4>

                </div>


                <div align="center" class="col-md-6">


                    <input type="number" class="form-control" name="quantidade" min="1" max="200" required>

                    <br>
/qual que eh aquela que eu tava acessando?
                    <form action="{{route('carrinho.finaliza')}}" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label" for="mesa">Mesa</label>
                            <input type="text" name="mesa" id="mesa" required="true"/>
                        </div>
                        <button type="submit" class="btn btn-block btn-lg btn-success">Finalizar pedido</button>
                    </form>
                </div>

                <br>


            </div>

        </div>

    </div>


    @stop