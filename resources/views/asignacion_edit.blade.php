@extends('layout')
@section('content')
    <h1 class="text-center">Edición de <i class="fas fa-book"></i> ASIGNACIÓN con id {{$asignacion->id}} </h1>



    <form action="/asignaciones/{{$asignacion->id}}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-3">
                <label for="id">ID </label>
                <input type="text" class="form-control" id="id" name="id" value="{{$asignacion->id}}" DISABLED>
            </div>
            {{--            <div class="form-group col-3">
                            <label for="id_producto">ID PRODUCTO</label>
                            <input type="text" class="form-control" id="id_producto" name="id_producto"
                                   value="{{$asignacion->id_producto}}">
                        </div>--}}
            <div class="form-group col-3">
                <label for="id_producto">PRODUCTO</label>
                <select class="custom-select" id="id_producto" name="id_producto" required>
                    @foreach($referencias as $referencia)
                        <option selected value="{{$referencia->id_producto}}">{{$referencia->referencia}}</option>
                    @endforeach
                </select>
            </div>

            {{--            <div class="form-group col-3">--}}
            {{--                <label for="id_categoria">ID_CATEGORIA</label>--}}
            {{--                <input type="text" class="form-control" id="id_categoria" name="id_categoria"--}}
            {{--                       value="{{$asignacion->id_categoria}}">--}}
            {{--            </div>--}}
            <div class="form-group col-3">
                <label for="id_categoria">CATEGORÍA</label>
                <select class="custom-select" id="id_categoria" name="id_categoria" required>
                    @foreach($nombre_categorias as $nombre_categoria)
                        <option selected
                                value="{{$nombre_categoria->id_categoria}}">{{$nombre_categoria->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-3">
                <label for="orden_web">ORDEN WEB</label>
                <input type="text" class="form-control" id="orden_web" name="orden_web"
                       value="{{$asignacion->orden_web}}">
            </div>
        </div>
        <div class="form-group">
            <label for="title">TITLE</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$asignacion->title}}">
        </div>
        <div class="form-group">
            <label for="metatitle">METATITLE</label>
            <input type="text" class="form-control" id="metatitle" name="metatitle" value="{{$asignacion->metatitle}}">
        </div>
        <div class="form-group">
            <label for="metadesc">METADESC</label>
            <input type="text" class="form-control" id="metadesc" name="metadesc" value="{{$asignacion->metadesc}}">
        </div>
        <div class="form-group">
            <label for="keywords">KEYWORDS</label>
            <input type="text" class="form-control" id="keywords" name="keywords" value="{{$asignacion->keywords}}">
        </div>

        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-warning " name="add">Modificar</button>
            </div>
        </div>

    </form>





@endsection
