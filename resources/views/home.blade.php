@extends('app')

@section('content')
<div class="container">
	<div class="panel-default">
		<div class="panel-default">
			<div class="panel panel-default">
				<div align="center" class="alert bg-primary"><b>INICIO</b></div>

				<div class="panel-danger">
					<h5 align="center" class=""><b>Você está autenticado como <b class="glyphicon glyphicon-arrow-right"></b> {{ Auth::user()->name }}</b> !</h5>

                </div>
			</div>
		</div>
	</div>
</div>
@endsection
