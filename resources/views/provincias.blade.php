@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center"><i class="far fa-map"></i> PROVINCIAS </h1>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">OPCIONES <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($provincias as $provincia)
        <tr>
            <td>{{$provincia->id}}</td>
            <td>{{$provincia->nombre}}</td>
            <td><a href="/provincias/{{$provincia->id}}" title="VER"><i class="far fa-eye"></i></a></a><br>
                <a href="/provincias/{{$provincia->id}}/edit" title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a class="btn disabled borrar" href="/provincias/{{$provincia->id}}/delete" title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$provincias->links()}}
        </div>
    </div>
    </div>
    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
