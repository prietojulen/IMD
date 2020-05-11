@extends('layout')
@section('content')

    <h1 class="text-center"> <i class="fas fa-ellipsis-h"></i> CATEGORÍA NUEVA</h1>



    <form action="/categorias" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-6">
                <label for="nombre">NOMBRE</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
     {{--           <div class="form-group col-6">
                    <label for="id_imagen">ID_IMAGEN</label>
                    <input type="text" class="form-control" id="id_imagen" name="id_imagen">
                </div>--}}

        <div class="form-group col-6">
            <label for="id_imagen">IMAGEN</label>
            <select class="custom-select" id="id_imagen" name="id_imagen" required>
                <option selected disabled value="">Seleccione Ruta de imagen</option>
                @foreach($imagenes as $imagen)
                    <option value="{{$imagen->id}}">{{$imagen->ruta}}</option>
                @endforeach
            </select>
        </div>
        </div>
        <div class="form-group">
            <label for="texto_seo">TEXTO_SEO</label>
            <input type="text" class="form-control" id="texto_seo" name="texto_seo" required>
        </div>
        <div class="form-group">
            <label for="title">TITLE</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="metatitle">METATITLE</label>
            <input type="text" class="form-control" id="metatitle" name="metatitle"required >
        </div>
        <div class="form-group">
            <label for="metadesc">METADESC</label>
            <input type="text" class="form-control" id="metadesc" name="metadesc"required>
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
