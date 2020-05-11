@extends('layout')
@section('content')
    <h1 class="text-center">Edición de <i class="far fa-image"></i> IMAGEN {{$imagen->ruta}} </h1>



    <form action="/imagenes/{{$imagen->id}}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-4">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{$imagen->id}}" disabled>
            </div>
            <div class="form-group col-8">
                <label for="ruta">RUTA</label>
                <input type="text" class="form-control" id="ruta" name="ruta" value="{{$imagen->ruta}}">
            </div>
            {{--<div class="form-group col-3">
                <label for="blanco">BLANCO</label>
                <input type="number" class="form-control" id="blanco" name="blanco" value="{{$imagen->blanco}}">
            </div>--}}
            <div class="form-check col-3">
                <p>BLANCO</p>
                @if($imagen->blanco == 1)
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="blanco" id="blanco_si" value="1" required
                               checked>
                        <label class="form-check-label" for="blanco_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="blanco" id="blanco_no" value="0" required>
                        <label class="form-check-label" for="blanco_no">NO</label>
                    </div>

                @else
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="blanco" id="blanco_si" value="1" required>
                        <label class="form-check-label" for="blanco_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="blanco" id="blanco_no" value="0" required
                               checked>
                        <label class="form-check-label" for="blanco_no">NO</label>
                    </div>
                @endif
            </div>
            {{--            <div class="form-group col-3">
                            <label for="rojo">ROJO</label>
                            <input type="number" class="form-control" id="rojo" name="rojo" value="{{$imagen->rojo}}">
                        </div>--}}
            <div class="form-group col-3">
                <p>ROJO</p>
                @if($imagen->rojo == 1)
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rojo" id="rojo_si" value="1" required
                               checked>
                        <label class="form-check-label" for="rojo_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rojo" id="rojo_no" value="0" required>
                        <label class="form-check-label" for="rojo_no">NO</label>
                    </div>

                @else
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rojo" id="rojo_si" value="1" required>
                        <label class="form-check-label" for="rojo_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rojo" id="rojo_no" value="0" required
                               checked>
                        <label class="form-check-label" for="rojo_no">NO</label>
                    </div>
                @endif
            </div>
            {{--<div class="form-group col-3">
                <label for="rosa">ROSA</label>
                <input type="number" class="form-control" id="rosa" name="rosa" value="{{$imagen->rosa}}">
            </div>--}}
            <div class="form-group col-3">
                <p>ROSA</p>
                @if($imagen->rosa == 1)
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rosa" id="rosa_si" value="1" required
                               checked>
                        <label class="form-check-label" for="rosa_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rosa" id="rosa_no" value="0" required>
                        <label class="form-check-label" for="rosa_no">NO</label>
                    </div>

                @else
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rosa" id="rosa_si" value="1" required>
                        <label class="form-check-label" for="rosa_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rosa" id="rosa_no" value="0" required
                               checked>
                        <label class="form-check-label" for="rosa_no">NO</label>
                    </div>
                @endif
            </div>
            {{-- <div class="form-group col-3">
                 <label for="variado">VARIADO</label>
                 <input type="number" class="form-control" id="variado" name="variado" value="{{$imagen->variado}}">
             </div>--}}
            <div class="form-group col-3">
                <p>VARIADO</p>
                @if($imagen->variado == 1)
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="variado" id="variado_si" value="1" required
                               checked>
                        <label class="form-check-label" for="variado_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="variado" id="variado_no" value="0" required>
                        <label class="form-check-label" for="variado_no">NO</label>
                    </div>

                @else
                    <div class="form-group col-3">
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="variado" id="variado_si" value="1"
                                   required>
                            <label class="form-check-label" for="variado_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="variado" id="variado_no" value="0"
                                   required
                                   checked>
                            <label class="form-check-label" for="variado_no">NO</label>
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





@endsection
