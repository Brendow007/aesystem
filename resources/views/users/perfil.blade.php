@extends('app')

@section('content')
@section('title')

    Perfil do Usuario

@endsection


@section('content')


<div class="alert alert-info">
<h1>

    <ul>

        <li>
    Usuario:{{ Auth::user()->name }}
    </li>

        <li>
    Email: {{ Auth::user()->email }}
    </li>

    </ul>

</h1>
</div>







@stop