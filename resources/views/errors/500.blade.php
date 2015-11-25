@extends('app')

@section('title')
    500 - Erro interno do servidor
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h1>Erro interno do servidor</h1>
                </div>
                <p><a href="{{url('/')}}">Início</a></p>
            </div>
        </div>
    </div>
@endsection