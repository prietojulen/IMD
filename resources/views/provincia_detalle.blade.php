@extends('layout')
@section('content')
    <div class="container-fluid">
    <h1 class="text-center">Detalle de la <i class="far fa-map"></i> PROVINCIA {{$provincias->nombre}} </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>

            <th scope="col">EDITAR</th>

        </tr>
        </thead>
        <tbody>

        <tr>
            <td>{{$provincias->id}}</td>
            <td>{{$provincias->nombre}}</td>
            <td> <a href="/provincias/{{$provincias->id}}/edit"><i class="far fa-edit"></i></a><br>
                <a href="/provincias/{{$provincias->id}}/delete"><i class="far fa-trash-alt"></i></a></td>

        </tr>

        </tbody>
    </table>

    </div>
@endsection
