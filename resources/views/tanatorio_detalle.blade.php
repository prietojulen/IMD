@extends('layout')
@section('content')
    <h1 class="text-center">Detalle de <i class="fas fa-place-of-worship"></i>TANATORIO {{$tanatorios->nombre}} </h1>

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
            <th scope="col">EDITAR <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>

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
                <a  class="btn disabled borrar" href="/tanatorios/{{$tanatorios->id}}/delete"><i class="far fa-trash-alt"></i></a></td>

        </tr>

        </tbody>
    </table>

    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
