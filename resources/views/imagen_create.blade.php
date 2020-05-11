@extends('layout')
@section('content')
    <h1 class="text-center"><i class="far fa-image"></i> IMAGEN NUEVA</h1>



    <form action="/imagenes" method="post">
        @csrf

        <div class="form-group">
            <label for="ruta">RUTA</label>
            <input type="text" class="form-control" id="ruta" name="ruta" required>
        </div>
        <div class="form-row">
{{--            <div class="form-group col-3">
                <label for="blanco">BLANCO</label>
                <input type="number" class="form-control" id="blanco" name="blanco">
            </div>--}}
            <div class="form-check col-3">
                <p>BLANCO</p>
                <div class="ml-3">
                <input class="form-check-input" type="radio" name="blanco" id="blanco_si" value="1" required>
                <label class="form-check-label" for="blanco_si">SI </label><br>
                </div>
                <div class="ml-3">
                <input class="form-check-input" type="radio" name="blanco" id="blanco_no" value="0" required>
                <label class="form-check-label" for="blanco_no">NO</label>
                </div>
            </div>
            {{--<div class="form-group col-3">
                <label for="rojo">ROJO</label>
                <input type="number" class="form-control" id="rojo" name="rojo">
            </div>--}}
            <div class="form-check col-3">
                <p>ROJO</p>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="rojo" id="rojo_si" value="1" required>
                    <label class="form-check-label" for="rojo_si">SI </label><br>
                </div>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="rojo" id="rojo_no" value="0" required>
                    <label class="form-check-label" for="rojo_no">NO</label>
                </div>
            </div>
{{--            <div class="form-group col-3">
                <label for="rosa">ROSA</label>
                <input type="number" class="form-control" id="rosa" name="rosa">
            </div>--}}
            <div class="form-check col-3">
                <p>ROSA</p>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="rosa" id="rosa_si" value="1" required>
                    <label class="form-check-label" for="rosa_si">SI </label><br>
                </div>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="rosa" id="rosa_no" value="0" required>
                    <label class="form-check-label" for="rosa_no">NO</label>
                </div>
            </div>
            {{--<div class="form-group col-3">
                <label for="variado">VARIADO</label>
                <input type="number" class="form-control" id="variado" name="variado">
            </div>--}}
            <div class="form-check col-3">
                <p>VARIADO</p>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="variado" id="variado_si" value="1" required>
                    <label class="form-check-label" for="variado_si">SI </label><br>
                </div>
                <div class="ml-3">
                    <input class="form-check-input" type="radio" name="variado" id="variado_no" value="0" required>
                    <label class="form-check-label" for="variado_no">NO</label>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-2">
            <div>
                <button type="submit" class="btn btn-primary" name="add">Añadir</button>
            </div>
        </div>

    </form>





@endsection
