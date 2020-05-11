@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Edición del <i class="fas fa-place-of-worship"></i> TANATORIO {{$tanatorio->nombre}}
        </h1>


        <form action="/tanatorios/{{$tanatorio->id}}" method="post">
            @csrf

            <div class="form-row">
                <div class="form-group col-1">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$tanatorio->id}}" disabled>
                </div>
                <div class="form-group col-3">
                    <label for="nombre">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$tanatorio->nombre}}">
                </div>
                <div class="form-group col-3">
                    <label for="calle">CALLE</label>
                    <input type="text" class="form-control" id="calle" name="calle" value="{{$tanatorio->calle}}">
                </div>
                <div class="form-group col-2">
                    <label for="id_provincia">PROVINCIA</label>
                    <input type="number" class="form-control" id="id_provincia" name="id_provincia" value="{{$tanatorio->id_provincia}}">
                </div>
                <div class="form-group col-3">
                    <label for="id_poblacion">POBLACIÓN</label>
                    <input type="number" class="form-control" id="id_poblacion" name="id_poblacion" value="{{$tanatorio->id_poblacion}}">
                </div>
                <div class="form-group col-4">
                    <label for="canon_corona">CANON CORONA</label>
                    <input type="number" class="form-control" id="canon_corona" name="canon_corona" value="{{$tanatorio->canon_corona}}">
                </div>
                <div class="form-group col-4">
                    <label for="canon_centro">CANON CENTRO</label>
                    <input type="number" class="form-control" id="canon_centro" name="canon_centro" value="{{$tanatorio->canon_centro}}">
                </div>
                <div class="form-group col-4">
                    <label for="canon_ramo">CANON RAMO</label>
                    <input type="number" class="form-control" id="canon_ramo" name="canon_ramo" value="{{$tanatorio->canon_ramo}}">
                </div>
                <div class="form-group col-2">
                    <label for="tiene_floristeria">TIENE FLORISTERIA</label>
                    {{--<input type="number" class="form-control" id="tiene_floristeria" name="tiene_floristeria" value="{{$tanatorio->tiene_floristeria}}">--}}
                    @if($tanatorio->tiene_floristeria == 1)
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="tiene_floristeria"
                                   id="tiene_floristeria_si" value="1" required
                                   checked>
                            <label class="form-check-label" for="tiene_floristeria_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="tiene_floristeria"
                                   id="tiene_floristeria_no" value="0" required>
                            <label class="form-check-label" for="tiene_floristeria_no">NO</label>
                        </div>

                    @else
                        <div class="form-group col-3">
                            <div class="ml-3">
                                <input class="form-check-input" type="radio" name="tiene_floristeria"
                                       id="tiene_floristeria_si" value="1" required>
                                <label class="form-check-label" for="tiene_floristeria_si">SI </label><br>
                            </div>
                            <div class="ml-3">
                                <input class="form-check-input" type="radio" name="tiene_floristeria" id="tiene_floristeria_no" value="0" required checked>
                                <label class="form-check-label" for="tiene_floristeria_no">NO</label>
                            </div>
                            @endif
                        </div>
                </div>
                <div class="form-group col-5">
                    <label for="email">EMAIL</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$tanatorio->email}}">
                </div>
                <div class="form-group col-3">
                    <label for="prioridad">PRIORIDAD</label>
                    <input type="number" class="form-control" id="prioridad" name="prioridad" value="{{$tanatorio->prioridad}}">
                </div>
                <div class="form-group col-2">
                    <label for="visible">VISIBLE</label>
                    {{-- <input type="number" class="form-control" id="visible" name="visible" value="{{$tanatorio->visible}}">--}}
                    {{--<input type="number" class="form-control" id="tiene_floristeria" name="tiene_floristeria" value="{{$tanatorio->tiene_floristeria}}">--}}
                    @if($tanatorio->visible == 1)
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="visible" id="visible_si" value="1" required checked>
                            <label class="form-check-label" for="visible_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="visible" id="visible_no" value="0" required>
                            <label class="form-check-label" for="visible_no">NO</label>
                        </div>

                    @else
                        <div class="form-group col-3">
                            <div class="ml-3">
                                <input class="form-check-input" type="radio" name="visible" id="visible_si" value="1" required>
                                <label class="form-check-label" for="visible_si">SI </label><br>
                            </div>
                            <div class="ml-3">
                                <input class="form-check-input" type="radio" name="visible" id="visible_no" value="0" required checked>
                                <label class="form-check-label" for="visible_no">NO</label>
                            </div>
                            @endif
                        </div>
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
