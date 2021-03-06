@extends('layout')
@section('content')
    <style>
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <h1 class="text-center"><i class="far fa-clock"></i> HORARIOS </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">DIA SEMANA</th>
            <th scope="col">HORARIO SALIDA</th>
            <th scope="col">MINUTO SALIDA</th>
            <th scope="col">OPCIONES <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($horarios as $horario)
        <tr>
            <td>{{$horario->id}}</td>
            <td>@switch($horario->dia_semana)
                    @case(0)
                    <option selected value="0">Lunes </option>
                    @break
                    @case(1)
                    <option selected value="1">Martes </option>
                    @break
                    @case(2)
                    <option selected value="2">Miercoles </option>
                    @break
                    @case(3)
                    <option selected value="3">Jueves </option>
                    @break
                    @case(4)
                    <option selected value="4">Viernes </option>
                    @break
                    @case(5)
                    <option selected value="5">Sábado </option>
                    @break
                    @case(6)
                    <option selected value="6">Domingo </option>
                    @break
                @endswitch</td>
            <td>{{$horario->hora_salida}}</td>
            <td>{{$horario->minuto_salida}}</td>

            <td><a href="/horarios/{{$horario->id}}"title="VER"><i class="far fa-eye"></i></a></a><br>
                <a href="/horarios/{{$horario->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a class="btn disabled borrar" href="/horarios/{{$horario->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$horarios->links()}}
        </div>
    </div>

    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
