@extends('layout')
@section('content')
    <h1 class="text-center">Detalle  <i class="fas fa-phone"></i> LLAMAME cliente:{{$llamame->nombre}} (id:{{$llamame->id}})  </h1>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">FECHA PETICION</th>
            <th scope="col">HORA PETICION</th>
            <th scope="col">EDITAR <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$llamame->id}}</td>
                <td>{{$llamame->nombre}}</td>
                <td>{{$llamame->telefono}}</td>
                <td>{{$llamame->fecha_peticion}}</td>
                <td>{{$llamame->hora_peticion}}</td>
                <td> <a href="/llamame/{{$llamame->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                    <a class="btn disabled borrar"  href="/llamame/{{$llamame->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

            </tr>

        </tbody>
    </table>
    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

@endsection
