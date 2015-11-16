@extends('app')

@section('title')
    Pagina inicial
@endsection

@section('content')

    <!-- carousel -->

    <div id="carousel-example-generic" class="carousel slide carousel-fade">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
            </li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="item active">
                <div class="carousel-caption hidden-xs">
                    <div data-animation="animated fadeInRightBig">
                        <h2>Peça agora!</h2>
                    </div>
                </div>
            </div>
            <!-- /.item -->

            <!-- Second slide -->
            <div class="item">
                <div class="carousel-caption hidden-xs">
                    <div data-animation="animated fadeInDownBig">
                        <h2>Faça seu pedido!</h2>
                    </div>
                </div>
            </div>
            <!-- /.item -->

            <!-- Third slide -->
            <div class="item">
                <div class="carousel-caption hidden-xs">
                    <div data-animation="animated fadeInLeftBig">
                        <h2>Aproveite o que há de melhor em nosso estabelecimento!</h2>
                    </div>
                </div>
            </div>
            <!-- /.item -->

        </div>
        <!-- /.carousel-inner -->

        <!-- Controls -->
        <a class="left carousel-control new-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="fa fa fa-angle-left waves-effect waves-light"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control new-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="fa fa fa-angle-right waves-effect waves-light"></span>
            <span class="sr-only">Previous</span>
        </a>

    </div>


    <!-- Page content -->
    <div class="container page-content">
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="http://faccabarcentro.com.br/facca/wp-content/uploads/2015/07/Johnnie-Walker-Whiskey-Wallpaper.jpg">
                        <img src="http://25.media.tumblr.com/tumblr_m2350cth4m1rtq2cho1_500.png">
                        <span class="card-title">Bebidas!</span>
                    </div>
                    <div class="card-content">
                        <p>Um dos mais pedidos da semana, o prato especial de nossa freguesia.</p>
                    </div>
                    <div class="card-action">
                        <a class="btn btn-primary waves-effect waves-light" href="http://localhost:8000/lista-produtos">É so pedir!</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">

                <div align="center">
                    <a class="btn btn-lg btn-block btn-warning waves-effect waves-light" href="http://localhost:8000/lista-produtos">FAZER PEDIDO!</a>
                </div>
<br>
<br>
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="http://www.emporiorigolo.com.br/wp-content/uploads/2014/03/Post-dia-31-2.jpeg">
                        <span class="card-title">Comidas!</span>
                    </div>
                    <div class="card-content">
                        <p>Um dos mais pedidos da semana, o prato especial de nossa freguesia.</p>
                    </div>
                    <div class="card-action" align="center">
                        <a class="btn btn-primary waves-effect waves-light" href="http://localhost:8000/lista-produtos">Aproveite agora!</a>
                    </div>

                </div>

            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="http://static.bolsademulher.com/sites/default/files/styles/big-featured/public/frozen-de-iogurte-de-cerejas.jpg?itok=0pQAPbyP">
                        <img src="http://www.fancypantsweddings.com/wp-content/uploads/2014/03/052-1050x700.jpg">
                        <span class="card-title">Sobremesas!</span>
                    </div>
                    <div class="card-content">
                        <p>Um dos mais pedidos da semana, o prato especial de nossa freguesia.</p>
                    </div>
                    <div class="card-action" align="right">
                        <a class="btn btn-primary waves-effect waves-light" href="http://localhost:8000/lista-produtos">Peça ja o seu!</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>


@endsection
