@extends('layaout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" style="text-align: center">Resultados</th>
                    </tr>
                   </thead>
            @foreach ($Users as $user)
                <tr>
                    <td>Rut: {{$user->rut}}</td>
                    <td>Nombres: {{$user->name}}</td>
                    <td>Email: {{$user->email}}</td>
                    <td><a href="{{ route('perfil.index') }}"><button class="btn btn-primary">perfil</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        </div>
    </div>
</div>
@endsection
