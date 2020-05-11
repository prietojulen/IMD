@extends('layout')
@section('content')
    <h1 class="text-center">Edición del <i class="fas fa-umbrella-beach"></i> FESTIVO {{$festivo->nombre}} ({{$festivo->id}})</h1>


    <form action="/festivos/{{$festivo->id}}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-4">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{$festivo->id}}" disabled>
            </div>
            <div class="form-group col-4">
                <label for="nombre">NOMBRE</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$festivo->nombre}}">
            </div>
            <div class="form-group col-4">
                <label for="fecha">FECHA</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="{{$festivo->fecha}}">
            </div>
{{--            <div class="form-group col-4">
                <label for="id_provincia">ID PROVINCIA</label>
                <input type="text" class="form-control" id="id_provincia" name="id_provincia"
                       value="{{$festivo->id_provincia}}">
            </div>--}}
            <div class="form-group col-4">
                <label for="id_provincia">PROVINCIA</label>
                <select class="custom-select" id="id_provincia" name="id_provincia" required>
                   {{-- <option selected  value="{{$festivo->id_provincia}}"></option>--}}
                    @foreach($provincias as $provincia)

                        <option  value="{{$provincia->id}}">{{$provincia->nombre}}</option>
                    @endforeach
                </select>
            </div>
{{--            <div class="form-group col-4">
                <label for="id_poblacion">ID POBLACIÓN</label>
                <input type="text" class="form-control" id="id_poblacion" name="id_poblacion"
                       value="{{$festivo->id_poblacion}}">
            </div>--}}
            <div class="form-group col-4">
                <label for="id_poblacion">POBLACIÓN</label>
                <select class="custom-select" id="id_poblacion" name="id_poblacion" required>
                    @foreach($poblaciones as $poblacion)
                        <option  value="{{$poblacion->id}}">{{$poblacion->nombre}}</option>
                    @endforeach
                </select>
            </div>
{{--            <div class="form-group col-4">--}}
{{--                <label for="tipo">TIPO</label>--}}
{{--                <input type="text" class="form-control" id="tipo" name="tipo" value="{{$festivo->tipo}}">--}}
{{--            </div>--}}
            <div class="form-group col-4">
                <label for="tipo">TIPO</label>
                <select class="custom-select" id="tipo" name="tipo" required>
                    <option selected  value="{{$festivo->tipo}}">{{$festivo->tipo}}</option>
                    <option   value="Local">Local</option>
                    <option   value="Nacional">Nacional</option>
                    <option   value="Mundial">Mundial</option>
                    <option   value="Otro">Otro</option>
                </select>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-warning " name="add">Modificar</button>
            </div>
        </div>

    </form>





@endsection
