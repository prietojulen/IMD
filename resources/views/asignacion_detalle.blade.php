@extends('layout')
@section('content')
    <h1 class="text-center">Detalle de <i class="fas fa-book"></i> ASIGNACION con id {{$asignaciones->id}} </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID PRODUCTO</th>
            <th scope="col">ID CATEGORIA</th>
            <th scope="col">ORDEN WEB</th>
            <th scope="col">TITLE</th>
            <th scope="col">METATITLE</th>
            <th scope="col">METADESC</th>
            <th scope="col">KEYWORDS</th>
            <th scope="col">EDITAR <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>

        </tr>
        </thead>
        <tbody>


            <tr>
                <td>{{$asignaciones->id}}</td>
                <td>{{$asignaciones->id_producto}}</td>
                <td>{{$asignaciones->id_categoria}}</td>
                <td>{{$asignaciones->orden_web}}</td>
                <td>{{$asignaciones->title}}</td>
                <td>{{$asignaciones->metatitle}}</td>
                <td>{{$asignaciones->metadesc}}</td>
                <td>{{$asignaciones->keywords}}</td>
                <td> <a href="/asignaciones/{{$asignaciones->id}}/edit" title="EDITAR"><i class="far fa-edit"></i></a><br>
                    <a class="btn disabled borrar"  href="/asignaciones/{{$asignaciones->id}}/delete" title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </tr>

        </tbody>
    </table>
    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

@endsection
