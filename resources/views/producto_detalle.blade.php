@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Detalle de <i class="fas fa-seedling"></i> PRODUCTO {{$producto->referencia}}</h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">REFERENCIA</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">PRECIO</th>
            <th scope="col">DESCUENTO</th>
            <th scope="col">PRECIO_PROVEEDOR</th>
            <th scope="col">ID_PROVINCIA</th>
            <th scope="col">ID_POBLACION</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">EDITAR <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>

        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->referencia}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->descuento}}</td>
                <td>{{$producto->precio_proveedor}}</td>
                <td>{{$producto->id_provincia}}</td>
                <td>{{$producto->id_poblacion}}</td>
                <td>{{$producto->descripcion}}</td>
                <td> <a href="/productos/{{$producto->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                    <a  class="btn disabled borrar" href="/productos/{{$producto->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

            </tr>

        </tbody>
    </table>
    </div>

    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

@endsection
