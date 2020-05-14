@extends('layout')
@section('content')
    <div class="container-fluid">
    <h1 class="text-center"> Detalle de la <i class="fas fa-map-pin"></i> POBLACIÓN {{$poblaciones->nombre}}</h1>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">PROVINCIA</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">NOMBRE2</th>
            <th scope="col">COLETILLA</th>
            <th scope="col">CAPITAL</th>
            <th scope="col">PORTES</th>
            <th scope="col">EDITAR <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>

        </tr>
        </thead>
        <tbody>

        <tr>
            <td>{{$poblaciones->id}}</td>
           <td>{{$poblaciones->id_provincia}}</td>
            {{--<td>{{$provincias[($poblaciones->id_provincia)-2]->nombre}}</td>--}}
            <td>{{$poblaciones->nombre}}</td>
            <td>{{$poblaciones->nombre2}}</td>
            <td>{{$poblaciones->coletilla}}</td>
            <td>{{$poblaciones->capital}}</td>
            <td>{{$poblaciones->portes}}</td>


            <td> <a href="/poblaciones/{{$poblaciones->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a class="btn disabled borrar" href="/poblaciones/{{$poblaciones->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

        </tr>

        </tbody>
    </table>
    <h4 class="text-center">PRODUCTOS DE ESTA POBLACIÓN</h4>
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
            <th scope="col">EDITAR </th>

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
            <td> <a href="/productos/{{$producto->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a  class="btn disabled borrar"  href="/productos/{{$producto->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>


    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
