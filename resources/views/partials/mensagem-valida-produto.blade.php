@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Opa!</strong> Existe algum problema com os dados informados<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif