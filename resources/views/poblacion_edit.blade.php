@extends('layout')
@section('content')
<div class="container-fluid">
    <h1 class="text-center">Edición de <i class="fas fa-map-pin"></i> POBLACIÓN {{$poblacion->nombre}} </h1>


    <form action="/poblaciones/{{$poblacion->id}}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-1 offset-1">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$poblacion->id}}" disabled>
        </div>
            <div class="form-group col-3">
            <label for="nombre">ID PROVINCIA</label>
           {{-- <input type="text" class="form-control" id="id_provincia" name="id_provincia" value="{{$poblacion->id_provincia}}">--}}
                <label for="id_provincia">PROVINCIA</label>
                <select class="custom-select" id="id_provincia" name="id_provincia" required>
                    {{-- <option selected  value="{{$festivo->id_provincia}}"></option>--}}
                    @foreach($provincias as $provincia)

                        <option  value="{{$provincia->id}}">{{$provincia->nombre}}</option>
                    @endforeach
                </select>
        </div>
            <div class="form-group col-3">
            <label for="nombre">NOMBRE</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$poblacion->nombre}}">
        </div>
            <div class="form-group col-3">
            <label for="nombre">NOMBRE2</label>
            <input type="text" class="form-control" id="nombre2" name="nombre2" value="{{$poblacion->nombre2}}">
        </div>
            <div class="form-group col-3 offset-1">
            <label for="coletilla">COLETILLA</label>
            <input type="text" class="form-control" id="coletilla" name="coletilla" value="{{$poblacion->coletilla}}">
        </div>
            <div class="form-group col-4">
            <label for="capital">CAPITAL</label>
            <input type="text" class="form-control" id="capital" name="capital" value="{{$poblacion->capital}}">
        </div>
            <div class="form-group col-3">
            <label for="portes">PORTES</label>
            <input type="text" class="form-control" id="portes" name="portes" value="{{$poblacion->portes}}">
        </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-warning " name="add">Modificar</button>
            </div>
        </div>

    </form>


</div>


@endsection
