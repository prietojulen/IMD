@extends('layout')
@section('content')
    <h1 class="text-center">Detalle  <i class="fas fa-phone"></i> LLAMAME cliente:{{$llamame->nombre}} (id:{{$llamame->id}})  </h1>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">FECHA PETICION</th>
            <th scope="col">HORA PETICION</th>
            <th scope="col">EDITAR</th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$llamame->id}}</td>
                <td>{{$llamame->nombre}}</td>
                <td>{{$llamame->telefono}}</td>
                <td>{{$llamame->fecha_peticion}}</td>
                <td>{{$llamame->hora_peticion}}</td>
                <td> <a href="/llamame/{{$llamame->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                    <a href="/llamame/{{$llamame->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

            </tr>

        </tbody>
    </table>


@endsection
