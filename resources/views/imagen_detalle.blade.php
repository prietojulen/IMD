@extends('layout')
@section('content')
    <h1 class="text-center">Detalle de <i class="far fa-image"></i> IMAGEN con id {{$imagenes->id}}</h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">RUTA</th>
            <th scope="col">BLANCO</th>
            <th scope="col">ROJO</th>
            <th scope="col">ROSA</th>
            <th scope="col">VARIADO</th>
            <th scope="col">EDITAR <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$imagenes->id}}</td>
                <td>{{$imagenes->ruta}}</td>
                <td>@if($imagenes->blanco ==1)
                        SI
                    @else
                        NO
                    @endif</td>
                <td>@if($imagenes->rojo ==1)
                        SI
                    @else
                        NO
                    @endif</td>
                <td>@if($imagenes->rosa ==1)
                        SI
                    @else
                        NO
                    @endif</td>
                <td>@if($imagenes->variado ==1)
                        SI
                    @else
                        NO
                    @endif</td>
                <td> <a href="/imagenes/{{$imagenes->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                    <a class="btn disabled borrar"  href="/imagenes/{{$imagenes->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

            </tr>

        </tbody>
    </table>

    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
