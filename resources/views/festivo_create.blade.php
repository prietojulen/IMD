@extends('layout')
@section('content')
    <h1 class="text-center"><i class="fas fa-umbrella-beach"></i> FESTIVO NUEVO</h1>



    <form action="/festivos" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-6">
                <label for="nombre">NOMBRE</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group col-6">
                <label for="fecha">FECHA</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
{{--            <div class="form-group col-6">
                <label for="id_provincia">ID PROVINCIA</label>
                <input type="text" class="form-control" id="id_provincia" name="id_provincia">
            </div>--}}
            <div class="form-group col-4">
                <label for="id_provincia">PROVINCIA</label>
                <select class="custom-select" id="id_provincia" name="id_provincia" required>
                    <option selected disabled value="">Seleccione una Provincia</option>
                    @foreach($provincias as $provincia)
                        <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
                    @endforeach
                </select>
            </div>
   {{--         <div class="form-group col-6">
                <label for="id_poblacion">ID POBLACIÓN</label>
                <input type="text" class="form-control" id="id_poblacion" name="id_poblacion">
            </div>--}}
            <div class="form-group col-4">
                <label for="id_poblacion">POBLACIONES</label>
                <select class="custom-select" id="id_poblacion" name="id_poblacion" required>
                    <option selected disabled value="">Seleccione una Poblacion</option>
                    @foreach($poblaciones as $poblacion)
                        <option value="{{$poblacion->id}}">{{$poblacion->nombre}}</option>
                    @endforeach
                </select>
            </div>
            {{--<div class="form-group col-6">
                <label for="tipo">TIPO</label>
                <input type="text" class="form-control" id="tipo" name="tipo">
            </div>--}}
            <div class="form-group col-4">
                <label for="tipo">TIPO</label>
                <select class="custom-select" id="tipo" name="tipo" required>
                    <option selected disabled value="">Seleccione un Tipo de festivo</option>
                    <option   value="Local">Local</option>
                    <option   value="Nacional">Nacional</option>
                    <option   value="Mundial">Mundial</option>
                    <option   value="Otro">Otro</option>
                </select>
            </div>
        </div>

            <div class="row d-flex justify-content-center">
                <div>
                    <button type="submit" class="btn btn-primary" name="add">Añadir</button>
                </div>
            </div>

    </form>





@endsection
