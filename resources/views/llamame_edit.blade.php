@extends('layout')
@section('content')
    <h1 class="text-center">Detalle de <i class="fas fa-phone"></i> LLAMAME cliente:{{$llamame->nombre}}
        (id:{{$llamame->id}})</h1>


    <form action="/llamame/{{$llamame->id}}" method="post">
        @csrf

        <div class="form-row">
            <div class="form-group col-4">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{$llamame->id}}" disabled>
            </div>
            <div class="form-group col-8">
                <label for="nombre">NOMBRE</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$llamame->nombre}}" required>
            </div>
            <div class="form-group col-4">
                <label for="telefono">TELEFONO</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{$llamame->telefono}}"
                       onkeyup="comprobarTelefono()" required>
            </div>
            <div class="form-group col-4">

                <label for="fecha_peticion">FECHA PETICION</label>
                <input type="date" class="form-control" id="fecha_peticion" name="fecha_peticion"
                       value="{{$llamame->fecha_peticion}}" required>
            </div>
            <div class="form-group col-4">

                <label for="hora_peticion">HORA PETICION</label>
                <input type="text" class="form-control" id="hora_peticion" name="hora_peticion"
                       placeholder="00:00 formato 24h" required onkeyup="comprobarHora();"
                       value="{{$llamame->hora_peticion}}">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-warning " name="add">Modificar</button>
            </div>
        </div>
    </form>


    <script src="{{URL::asset('js/comprobaciones.js')}}"></script>

@endsection
