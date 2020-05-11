@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center"><i class="far fa-map"></i> PROVINCIAS </h1>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">OPCIONES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($provincias as $provincia)
        <tr>
            <td>{{$provincia->id}}</td>
            <td>{{$provincia->nombre}}</td>
            <td><a href="/provincias/{{$provincia->id}}" title="VER"><i class="far fa-eye"></i></a></a><br>
                <a href="/provincias/{{$provincia->id}}/edit" title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a href="/provincias/{{$provincia->id}}/delete" title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$provincias->links()}}
        </div>
    </div>
    </div>

@endsection
