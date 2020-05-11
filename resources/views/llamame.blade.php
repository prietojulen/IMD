@extends('layout')
@section('content')
    <h1 class="text-center"> <i class="fas fa-phone"></i> LLAMAME </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">FECHA PETICION</th>
            <th scope="col">HORA PETICION</th>

            <th scope="col">OPCIONES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($llamames as $llamame)
        <tr>
            <td>{{$llamame->id}}</td>
            <td>{{$llamame->nombre}}</td>
            <td>{{$llamame->telefono}}</td>
            <td>{{$llamame->fecha_peticion}}</td>
            <td>{{$llamame->hora_peticion}}</td>
            <td><a href="/llamame/{{$llamame->id}}"title="VER"><i class="far fa-eye"></i></a></a><br>
                <a href="/llamame/{{$llamame->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a href="/llamame/{{$llamame->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$llamames->links()}}
        </div>
    </div>

@endsection
