<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AESYSTEM @yield('title')</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='ssheetylet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="alert-info navbar navbar-primary">

    <div class="container-fluid">

        <div class="alert-info navbar-header">





            <button type="button" class="alert-info navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>



        <a class="btn btn-info btn-block" href="/" >AE-SYSTEM</a>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



            <ul class="nav navbar-nav alert-success">
					<li><a class="btn btn-primary" href="/">Gerenciar</a></li>
                    <li><a class="btn btn-success" href="{{route('produtos.index')}}"> Produtos </a> </li>
                </ul>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    <li><a class="btn btn-success" href="{{url('pedido')}}">Pedidos </a> </li>
                </ul>



                    <div>
                        <ul class="nav navbar-nav">
                    <li><a class="btn btn-success" href="{{url('users/listar')}}"><span class="glyphicons glyphicons-user"></span></i> Usuários </a> </li>
                    </ul>




                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('carrinho.carrinho')}}">Meu carrinho <span class="badge">{{$totalItens}}</span></a></li>
                            @if (Auth::guest())

                                <li><a class="btn btn-warning" href="/auth/login">Entrar</a></li>
                                <li><a class="btn btn-warning" href="/auth/register">Registrar</a></li>

                            @else

                                <li class="dropdown">

							         <a href="#" class="btn-warning dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">
                                <li><a class="btn-warning" href="/users/perfil">Perfil</a></li>
                                <li><a class="btn-warning" href="/auth/logout">Sair</a></li>

							</ul>
						</li>

                            @endif

                     </ul>
                </div>
            </div>
        </div>
     </div>
</nav>


    <div class="container">
        @include('flash::message')
    </div>


	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
