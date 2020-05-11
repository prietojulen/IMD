@extends('layout')
@section('content')
    <div class="container-fluid">
    <h1 class="text-center"> <i class="fas fa-place-of-worship"></i> TANATORIO Nuevo </h1>

    <form action="/tanatorios" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-3">
            <label for="nombre">NOMBRE</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
            <div class="form-group col-3">
            <label for="calle">CALLE</label>
            <input type="text" class="form-control" id="calle"  name="calle" required>
        </div>
            <div class="form-group col-3">
           {{-- <label for="id_provincia">PROVINCIA</label>
            <input type="number" class="form-control" id="id_provincia"  name="id_provincia" required>--}}
                <label for="id_provincia">PROVINCIA</label>
                <select class="custom-select" id="id_provincia" name="id_provincia" required>
                    <option selected disabled value="">Seleccione una Provincia</option>
                    @foreach($provincias as $provincia)
                        <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
                    @endforeach
                </select>
        </div>
            <div class="form-group col-3">
           {{-- <label for="id_poblacion">POBLACIÓN</label>
            <input type="number" class="form-control" id="id_poblacion"  name="id_poblacion" required>--}}
                <label for="id_poblacion">POBLACION</label>
                {{-- <input type="text" class="form-control" id="id_poblacion" name="id_poblacion">--}}
                <select class="custom-select" id="id_poblacion" name="id_poblacion" required>
                    <option selected disabled value="">Seleccione una Poblacion</option>
                    @foreach($poblaciones as $poblacion)
                        <option value="{{$poblacion->id}}">{{$poblacion->nombre}}</option>
                    @endforeach
                </select>
        </div>
            <div class="form-group col-4">
            <label for="canon_corona">CANON CORONA</label>
            <input type="number" class="form-control" id="canon_corona" name="canon_corona" required>
        </div>
            <div class="form-group col-4">
            <label for="canon_centro">CANON CENTRO</label>
            <input type="number" class="form-control" id="canon_centro" name="canon_centro" required>
        </div>
            <div class="form-group col-4">
            <label for="canon_ramo">CANON RAMO</label>
            <input type="number" class="form-control" id="canon_ramo" name="canon_ramo" required>
        </div>
            <div class="form-group col-2">
            {{--<label for="tiene_floristeria">TIENE FLORISTERIA</label>
            <input type="number" class="form-control" id="tiene_floristeria" name="tiene_floristeria" required>--}}
                <p>¿TIENE FLORISTERÍA?</p>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="tiene_floristeria" id="tiene_floristeria_si" value="1" required>
                    <label class="form-check-label" for="tiene_floristeria_si">SI </label><br>
                </div>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="tiene_floristeria" id="tiene_floristeria_no" value="0" required>
                    <label class="form-check-label" for="tiene_floristeria_no">NO</label>
                </div>
        </div>
            <div class="form-group col-5">
            <label for="email">EMAIL</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
            <div class="form-group col-3">
            <label for="prioridad">PRIORIDAD</label>
           {{-- <input type="number" class="form-control" id="prioridad" name="prioridad" required>--}}
                <select class="custom-select" id="prioridad" name="prioridad" required>
                    <option selected disabled value="">Seleccione una Prioridad</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
        </div>
            <div class="form-group col-2">
            {{--<label for="visible">VISIBLE</label>--}}
           {{-- <input type="number" class="form-control" id="visible" name="visible" required>--}}
                <p>VISIBLE</p>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="visible" id="visible_si" value="1" required>
                    <label class="form-check-label" for="visible_si">SI </label><br>
                </div>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="visible" id="visible_no" value="0" required>
                    <label class="form-check-label" for="visible_no">NO</label>
                </div>
        </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-primary" name="add">Añadir</button>
            </div>
        </div>

    </form>



    </form>

    </div>



@endsection
