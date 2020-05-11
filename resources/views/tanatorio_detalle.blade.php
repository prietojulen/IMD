@extends('layout')
@section('content')
    <h1>TANATORIO {{$tanatorios->nombre}} detalle</h1>

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
            <th scope="col">EDITAR</th>

        </tr>
        </thead>
        <tbody>

        <tr>
            <td>{{$tanatorios->id}}</td>
            <td>{{$tanatorios->nombre}}</td>
            <td>{{$tanatorios->calle}}</td>
            <td>{{$tanatorios->id_provincia}}</td>
            <td>{{$tanatorios->id_poblacion}}</td>
            <td>{{$tanatorios->canon_corona}}</td>
            <td>{{$tanatorios->canon_centro}}</td>
            <td>{{$tanatorios->canon_ramo}}</td>
            <td>{{$tanatorios->tiene_floristeria}}</td>
            <td>{{$tanatorios->email}}</td>
            <td>{{$tanatorios->prioridad}}</td>
            <td>{{$tanatorios->visible}}</td>
            <td> <a href="/tanatorios/{{$tanatorios->id}}/edit"><i class="far fa-edit"></i></a><br>
                <a href="/tanatorios/{{$tanatorios->id}}/delete"><i class="far fa-trash-alt"></i></a></td>

        </tr>

        </tbody>
    </table>


@endsection
