@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">  <i class="fas fa-seedling"></i> PRODUCTOS </h1>

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
            <th scope="col">OPCIONES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
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
            <td><a href="/productos/{{$producto->id}}"title="VER"><i class="far fa-eye"></i></a></a><br>
                <a href="/productos/{{$producto->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a href="/productos/{{$producto->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

        <div class="row d-flex justify-content-center">
            <div class="col-3 paginacion ">
                {{$productos->links()}}
            </div>
        </div>
    </div>

@endsection
