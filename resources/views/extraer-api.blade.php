@extends('layout')

@section('content')

<div class="m-4">
   
    <h1 class="text-center text-primary">EXTRAER DATOS DESDE API</h1>
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @else
    <div class="m-4">
        <table class="table table-striped">
            <tr>
                <th class="table-primary">ID</th>
                <th class="table-primary">NOMBRE</th>
                <th class="table-primary">EMAIL</th>
            </tr>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario['id']}}</td>
                <td>{{$usuario['name']}}</td>
                <td>{{$usuario['email']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    @endif
</div>
@endsection