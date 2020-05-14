@extends('layout')
@section('content')

    <div class="container-fluid">
        <h1 class="text-center"><i class="fas fa-book"></i> ASIGNACIONES </h1>

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
                <th scope="col">OPCIONES <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($asignaciones as $asignacion)
                <tr>
                    <td>{{$asignacion->id}}</td>
                    <td>{{$asignacion->id_producto}}</td>
                    <td>{{$asignacion->id_categoria}}</td>
                    <td>{{$asignacion->orden_web}}</td>
                    <td>{{$asignacion->title}}</td>
                    <td>{{$asignacion->metatitle}}</td>
                    <td>{{$asignacion->metadesc}}</td>
                    <td>{{$asignacion->keywords}}</td>
                    <td><a href="/asignaciones/{{$asignacion->id}}" title="VER"><i class="far fa-eye"></i></a><br>
                        <a href="/asignaciones/{{$asignacion->id}}/edit" title="EDITAR"><i
                                class="far fa-edit"></i></a><br>
                        <a class="btn disabled borrar" href="/asignaciones/{{$asignacion->id}}/delete" title="BORRAR"><i
                                class="far fa-trash-alt"></i></a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="row d-flex justify-content-center">
            <div class="col-3 paginacion ">
                {{$asignaciones->links()}}
            </div>
        </div>
    </div>


    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
