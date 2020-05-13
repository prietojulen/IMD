@extends('layout')
@section('content')
    <h1 class="text-center">Detalle de <i class="fas fa-umbrella-beach"></i>FESTIVO {{$festivos->nombre}} </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA</th>
            <th scope="col">ID PROVINCIA</th>
            <th scope="col">ID POBLACION</th>
            <th scope="col">TIPO</th>
            <th scope="col">EDITAR <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>

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
                    <a class="btn disabled borrar" href="/festivos/{{$festivos->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

            </tr>

        </tbody>
    </table>
    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


@endsection
