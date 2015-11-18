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


                    <a class="btn-block btn-lg btn-success" href="/carrinho/carrinho">Finalizar Pedido! </a>
                </div>

                <br>


            </div>

        </div>

    </div>


    @stop