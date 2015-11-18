<!DOCTYPE html>
<html lang="en">
<head class="alert-info" >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AESYSTEM @yield('title')</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.css" rel="stylesheet">

    <!-- Template style -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Template style Icons Specials-->
    <link href="css/bootstrap.icon-large.min.css" rel="stylesheet">






    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='ssheetylet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">
<div class="btn-block" align="center">

    <h2 align="center" class="text-info glyphicon glyphicon-cutlery"> AE-SYSTEM - Sistema de Atendimento Eletrônico</h2>

</div>

<nav class="navbar navbar-primary">

    <div class="container-fluid">

        <div class="alert-info navbar-header">





            <button type="button" class="alert-info navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>




        <br>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



            <ul class="nav navbar-nav">
					<li><a class="primary-color waves-effect waves-light" href="/">Inicio</a></li>
                    <li><a class="primary-color waves-effect waves-light" href="{{route('produtos.index')}}"> Produtos </a> </li>
                </ul>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    <li><a class="primary-color waves-effect waves-light" href="{{url('pedido')}}">Pedidos </a> </li>
                </ul>



                    <div>
                        <ul class="nav navbar-nav">
                    <li><a class="primary-color waves-effect waves-light" href="{{url('users/listar')}}"><span class="glyphicons glyphicons-user"></span></i> Usuários </a> </li>
                    </ul>




                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="glyphicon glyphicon-list waves-effect waves-light" href="{{route('listaprodutos1')}}"> Cardapio</a></li>

                            <ul class="nav navbar-nav navbar-right">
                            <li><a class="glyphicon glyphicon-shopping-cart waves-effect waves-light" href="{{route('carrinho.carrinho')}}"> Meu pedido <span class="badge">{{$totalItens}}</span></a></li>

                            @if (Auth::guest())

                                <li><a class="primary-color waves-effect waves-light" href="/auth/login">Entrar</a></li>
                                <li><a class="primary-color waves-effect waves-light" href="/auth/register">Registrar</a></li>

                            @else

                                <li class="dropdown">

							         <a href="#" class="dropdown-toggle waves-effect waves-light waves-block " data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">
                                <li><a href="/auth/logout">Sair</a></li>

							</ul>
						</li>

                            @endif

                     </ul>
                </div>
            </div>
        </div>

     </div>
</nav>
<div class="primary-color footer-copyright footer navbar-fixed-bottom">
    <div align="center" class="container white-text">
        © 2015 Copyright AE-SYSTEM
    </div>
</div>
    <div class="container">
        @include('flash::message')
    </div>


	@yield('content')

	<!-- Scripts -->

<!-- JQuery -->
<script type="text/javascript" src="/js/jquery.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<!-- Material Design Bootstrap -->
<script type="text/javascript" src="/js/mdb.js"></script>


</body>
</html>
