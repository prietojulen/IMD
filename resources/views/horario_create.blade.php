@extends('layout')
@section('content')
    <h1 class="text-center">Nuevo  <i class="far fa-clock"></i> HORARIO </h1>



    <form action="/horarios" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-4">

            <label for="dia_semana">DIA SEMANA</label>
            {{--<input type="text" class="form-control" id="dia_semana" name="dia_semana" >--}}
            <select class="custom-select" id="dia_semana"name="dia_semana" required>
                <option  value="0">Lunes </option>
                <option  value="1">Martes </option>
                <option  value="2">Miercoles </option>
                <option  value="3">Jueves </option>
                <option  value="4">Viernes </option>
                <option  value="5">Sábado </option>
                <option  value="6">Domingo </option>
            </select>
        </div>
            <div class="form-group col-4">
            <label for="horario_salida">HORARIO SALIDA</label>
            <input type="number" class="form-control" id="hora_salida"  name="hora_salida" min="0" max="23">
        </div>
            <div class="form-group col-4">
            <label for="minuto_salida">MINUTO SALIDA</label>
            <input type="text" class="form-control" id="minuto_salida" name="minuto_salida" min="0" max="59" >
        </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-primary" name="add">Añadir</button>
            </div>
        </div>

    </form>





@endsection
