@extends('layout')
@section('content')
    <h1 class="text-center">Edición de <i class="far fa-clock"></i> HORARIO {{$horario->id}} </h1>



    <form action="/horarios/{{$horario->id}}" method="post">
        @csrf
        <div class="form-row">

            <div class="form-group col-3">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{$horario->id}}" disabled>
            </div>
           {{-- <div class="form-group col-3">
                <label for="dia_semana">DIA SEMANA</label>
                <input type="text" class="form-control" id="dia_semana" name="dia_semana"
                       value="{{$horario->dia_semana}}">
            </div>--}}
            <div class="form-group col-3">
                <label for="dia_semana">DIA SEMANA</label>
                <select class="custom-select" id="dia_semana"name="dia_semana" required>
                    <option selected disabled value="{{$horario->dia_semana}}">
                            @switch($horario->dia_semana)
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
                            @endswitch
                      </option>
                        <option  value="0">Lunes </option>
                        <option  value="1">Martes </option>
                        <option  value="2">Miercoles </option>
                        <option  value="3">Jueves </option>
                        <option  value="4">Viernes </option>
                        <option  value="5">Sábado </option>
                        <option  value="6">Domingo </option>
                </select>

            </div>
            <div class="form-group col-3">
                <label for="horario_salida">HORARIO SALIDA</label>
                <input type="number" class="form-control" id="hora_salida" name="hora_salida"
                       value="{{$horario->hora_salida}}" min="0" max="23">
            </div>
            <div class="form-group col-3">
                <label for="minuto_salida">MINUTO SALIDA</label>
                <input type="number" class="form-control" id="minuto_salida" name="minuto_salida"
                       value="{{$horario->minuto_salida}}" min="0" max="59">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-warning " name="add">Modificar</button>
            </div>
        </div>
    </form>




@endsection
