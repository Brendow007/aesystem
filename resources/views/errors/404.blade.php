@extends('app')

@section('title')
    404 - Página não encontrada!
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h1>Página não encontrada.</h1>
                </div>
                <p><a href="{{url('/')}}">Início</a></p>
            </div>
        </div>
    </div>
@endsection