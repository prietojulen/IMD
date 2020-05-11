@extends('layout')
@section('content')
    <h1 class="text-center">Edición de <i class="fas fa-ellipsis-h"></i> CATEGORÍA {{$categoria->nombre}} </h1>



    <form action="/categorias/{{$categoria->id}}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-4">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{$categoria->id}}" DISABLED>
            </div>

            <div class="form-group col-4">
                <label for="nombre">NOMBRE</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$categoria->nombre}}">
            </div>
{{--            <div class="form-group col-4">
                <label for="id_imagen">ID_IMAGEN</label>
                <input type="text" class="form-control" id="id_imagen" name="id_imagen"
                       value="{{$categoria->id_imagen}}">
            </div>--}}
            <div class="form-group col-4">
                <label for="id_producto">RUTA DE IMAGEN</label>
                <select class="custom-select" id="id_imagen" name="id_imagen" required>
                    @foreach($rutas as $ruta)
                        <option selected  value="{{$ruta->id}}">{{$ruta->ruta}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="texto_seo">TEXTO_SEO</label>
            <input type="text" class="form-control" id="texto_seo" name="texto_seo" value="{{$categoria->texto_seo}}">
        </div>
        <div class="form-group">
            <label for="title">TITLE</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$categoria->title}}">
        </div>
        <div class="form-group">
            <label for="metatitle">METATITLE</label>
            <input type="text" class="form-control" id="metatitle" name="metatitle" value="{{$categoria->metatitle}}">
        </div>
        <div class="form-group">
            <label for="metadesc">METADESC</label>
            <input type="text" class="form-control" id="metadesc" name="metadesc" value="{{$categoria->metadesc}}">
        </div>
        <div class="form-group">
            <label for="keywords">KEYWORDS</label>
            <input type="text" class="form-control" id="keywords" name="keywords" value="{{$categoria->keywords}}">
        </div>

        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-warning " name="add">Modificar</button>
            </div>
        </div>

    </form>





@endsection
