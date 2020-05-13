@extends('layout')
@section('content')
    <h1 class="text-center"> <i class="far fa-image"></i> IMAGENES </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">RUTA</th>
            <th scope="col">BLANCO</th>
            <th scope="col">ROJO</th>
            <th scope="col">ROSA</th>
            <th scope="col">VARIADO</th>
            <th scope="col">OPCIONES <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>

        </tr>
        </thead>
        <tbody>
        @foreach($imagenes as $imagen)
        <tr>
            <td>{{$imagen->id}}</td>
            <td>{{$imagen->ruta}}</td>
            <td>@if($imagen->blanco ==1)
                SI
            @else
                NO
            @endif</td>
            <td>@if($imagen->rojo ==1)
                    SI
                @else
                    NO
                @endif</td>
            <td>@if($imagen->rosa ==1)
                    SI
                @else
                    NO
                @endif</td>
            <td>@if($imagen->variado ==1)
                    SI
                @else
                    NO
                @endif</td>
            <td><a href="/imagenes/{{$imagen->id}}"title="VER"><i class="far fa-eye"></i></a></a><br>
                <a href="/imagenes/{{$imagen->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a class="btn disabled borrar" href="/imagenes/{{$imagen->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$imagenes->links()}}
        </div>
    </div>
    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
