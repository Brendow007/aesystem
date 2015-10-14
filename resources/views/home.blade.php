@extends('app')

@section('content')
<div class="container">
	<div class="panel-default">
		<div class="panel panel-heading">
			<div class=" alert-info panel panel-default">
				<div align="center" class="btn btn-block btn-info">INICIO</div>

				<div class="panel-danger">
					<h4 align="center"><b>Você está autenticado como <b class="glyphicon glyphicon-arrow-right"></b> {{ Auth::user()->name }}</b> !</h4>

                </div>
			</div>
		</div>
	</div>
</div>
@endsection
