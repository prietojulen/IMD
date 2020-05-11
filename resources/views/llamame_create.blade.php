@extends('layout')
@section('content')

    <h1 class="text-center"><i class="fas fa-phone"></i> LLAMAME NUEVO</h1>



    <form action="/llamame" method="post">
        @csrf

        <div class="form-row">
            <div class="form-group col-6">
                <label for="nombre">NOMBRE</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group col-6">
                <label for="telefono">TELEFONO</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required onkeyup="comprobarTelefono()">
            </div>
            <div class="form-group col-6">
                <label for="fecha_peticion">FECHA PETICION</label>
                <input type="date" class="form-control" id="fecha_peticion" name="fecha_peticion" required>
            </div>
            <div class="form-group col-6">
                <label for="hora_peticion">HORA PETICION</label>
                <input type="text" class="form-control" id="hora_peticion" name="hora_peticion" placeholder="00:00 formato 24h" required onkeyup="comprobarHora();">
            </div>
        </div>
            <div class="row d-flex justify-content-center">
                <div>
                    <button type="submit" class="btn btn-primary" id="crear" name="add">Añadir</button>
                </div>
            </div>


    </form>


    <script src="{{URL::asset('js/comprobaciones.js')}}"></script>



@endsection
