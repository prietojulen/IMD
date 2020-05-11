@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center"> <i class="fas fa-place-of-worship"></i> TANATORIOS </h1>

        <div class="row d-flex justify-content-center">
            <div class="col-3 paginacion ">
                {{$tanatorios->links()}}
            </div>
        </div>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CALLE</th>
            <th scope="col">ID PROVINCIA</th>
            <th scope="col">ID POBLACION</th>
            <th scope="col">CANON CORONA</th>
            <th scope="col">CANON CENTRO</th>
            <th scope="col">CANON RAMO</th>
            <th scope="col">TIENE FLORISTERIA</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PRIORIDAD</th>
            <th scope="col">VISIBLE</th>
            <th scope="col">OPCIONES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tanatorios as $tanatorio)
        <tr>
            <td>{{$tanatorio->id}}</td>
            <td>{{$tanatorio->nombre}}</td>
            <td>{{$tanatorio->calle}}</td>
            <td>{{$tanatorio->id_provincia}}</td>
            {{--<td>{{$provincias[($tanatorio->id_provincia)-1]->nombre}}</td>--}}
            <td>{{$tanatorio->id_poblacion}}</td>
            <td>{{$tanatorio->canon_corona}}</td>
            <td>{{$tanatorio->canon_centro}}</td>
            <td>{{$tanatorio->canon_ramo}}</td>
            <td>{{$tanatorio->tiene_floristeria}}</td>
            <td>{{$tanatorio->email}}</td>
            <td>{{$tanatorio->prioridad}}</td>
            <td>{{$tanatorio->visible}}</td>

            <td><a href="/tanatorios/{{$tanatorio->id}}" title="VER"><i class="far fa-eye"></i></a><br>
                <a href="/tanatorios/{{$tanatorio->id}}/edit" title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a href="/tanatorios/{{$tanatorio->id}}/delete" title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$tanatorios->links()}}
        </div>
    </div>
@endsection
