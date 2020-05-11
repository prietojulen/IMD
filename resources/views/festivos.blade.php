@extends('layout')
@section('content')
    <h1 class="text-center"><i class="fas fa-umbrella-beach"></i> FESTIVOS </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA</th>
            <th scope="col">ID PROVINCIA</th>
            <th scope="col">ID POBLACION</th>
            <th scope="col">TIPO</th>
            <th scope="col">OPCIONES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($festivos as $festivo)
            <tr>
                <td>{{$festivo->id}}</td>
                <td>{{$festivo->nombre}}</td>
                <td>{{$festivo->fecha}}</td>
                <td>{{$festivo->id_provincia}}</td>
                <td>{{$festivo->id_poblacion}}</td>
                <td>{{$festivo->tipo}}</td>
                <td><a href="/festivos/{{$festivo->id}}" title="VER"><i class="far fa-eye"></i></a></a><br>
                    <a href="/festivos/{{$festivo->id}}/edit" title="EDITAR"><i class="far fa-edit"></i></a><br>
                    <a href="/festivos/{{$festivo->id}}/delete" title="BORRAR"><i class="far fa-trash-alt"></i></a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$festivos->links()}}
        </div>
    </div>


@endsection
