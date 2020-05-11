@extends('layout')
@section('content')
    <h1 class="text-center"><i class="fas fa-book"></i> ASIGNACIÓN NUEVA</h1>



    <form action="/asignaciones" method="post">
        @csrf

        <div class="form-row">

            {{--<div class="form-group col-4">
                            <label for="id_producto">ID PRODUCTO</label>
                            <input type="text" class="form-control" id="id_producto" name="id_producto">
                        </div>--}}
            <div class="form-group col-4">
                <label for="id_producto">PRODUCTO</label>
                <select class="custom-select" id="id_producto" name="id_producto" required>
                    <option selected disabled value="">Seleccione Ref. Producto</option>
                    @foreach($productos as $producto)
                        <option value="{{$producto->id}}">{{$producto->referencia}}</option>
                    @endforeach
                </select>
            </div>

{{--            <div class="form-group col-4">
                <label for="id_categoria">ID_CATEGORIA</label>
                <input type="text" class="form-control" id="id_categoria" name="id_categoria">
            </div>--}}
            <div class="form-group col-4">
                <label for="id_categoria">CATEGORIA</label>
                <select class="custom-select" id="id_categoria"name="id_categoria" required>
                    <option selected disabled value="">Seleccione Categoria</option>
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-4">
                <label for="orden_web">ORDEN WEB</label>
                <input type="number" class="form-control" id="orden_web" name="orden_web" required>
            </div>
        </div>
        <div class="form-group">
            <label for="title">TITLE</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="metatitle">METATITLE</label>
            <input type="text" class="form-control" id="metatitle" name="metatitle" required>
        </div>
        <div class="form-group">
            <label for="metadesc">METADESC</label>
            <input type="text" class="form-control" id="metadesc" name="metadesc" required>
        </div>
        <div class="form-group">
            <label for="keywords">KEYWORDS</label>
            <input type="text" class="form-control" id="keywords" name="keywords" required>
        </div>

        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-primary" name="add">Añadir</button>
            </div>
        </div>


    </form>





@endsection
