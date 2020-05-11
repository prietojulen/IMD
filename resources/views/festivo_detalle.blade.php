@extends('layout')
@section('content')
    <h1>FESTIVO {{$festivos->nombre}} detalle</h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA</th>
            <th scope="col">ID PROVINCIA</th>
            <th scope="col">ID POBLACION</th>
            <th scope="col">TIPO</th>
            <th scope="col">EDITAR</th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$festivos->id}}</td>
                <td>{{$festivos->nombre}}</td>
                <td>{{$festivos->fecha}}</td>
                <td>{{$festivos->id_provincia}}</td>
                <td>{{$festivos->id_poblacion}}</td>
                <td>{{$festivos->tipo}}</td>
                <td> <a href="/festivos/{{$festivos->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                    <a href="/festivos/{{$festivos->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

            </tr>

        </tbody>
    </table>


@endsection
