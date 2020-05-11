@extends('layout')
@section('content')
    <h1 class="text-center">Detalle de <i class="far fa-clock"></i> HORARIO {{$horarios->id}} </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">DIA SEMANA</th>
            <th scope="col">HORARIO SALIDA</th>
            <th scope="col">MINUTO SALIDA</th>
            <th scope="col">EDITAR</th>

        </tr>
        </thead>
        <tbody>

        <tr>
            <td>{{$horarios->id}}</td>
            <td>@switch($horarios->dia_semana)
                    @case(0)
                    Lunes
                    @break
                    @case(1)
                    Martes
                    @break
                    @case(2)
                    Miercoles
                    @break
                    @case(3)
                    Jueves
                    @break
                    @case(4)
                    Viernes
                    @break
                    @case(5)
                    Sábado
                    @break
                    @case(6)
                    Domingo
                    @break
                @endswitch</td>
            <td>{{$horarios->hora_salida}}</td>
            <td>{{$horarios->minuto_salida}}</td>
            <td><a href="/horarios/{{$horarios->id}}/edit" title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a href="/horarios/{{$horarios->id}}/delete" title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

        </tr>

        </tbody>
    </table>


@endsection
