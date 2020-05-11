@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center"><i class="fas fa-seedling"></i> PRODUCTO NUEVO</h1>

        <form action="/productos" method="post">
            @csrf
            <div class="form-row">

                <div class="form-group col-2">
                    <label for="referencia">REFERENCIA</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" required>
                </div>
                <div class="form-group col-4">
                    <label for="nombre">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group col-2">
                    <label for="precio">PRECIO</label>
                    <input type="text" class="form-control" id="precio" name="precio" onkeyup="comprobacionPrecio();" placeholder="Nº entero o 2 decimáles" required>
                </div>
                <div class="form-group col-2">
                    <label for="descuento">DESCUENTO</label>
                    <input type="text" class="form-control" id="descuento" name="descuento" onkeyup="comprobacionDescuento();" placeholder="0-100" required>
                </div>
                <div class="form-group col-2">
                    <label for="precio_proveedor">PRECIO PROVEEDOR</label>
                    <input type="text" class="form-control" id="precio_proveedor" name="precio_proveedor" onkeyup="comprobacionPrecioProveedor();" placeholder="Nº entero o 2 decimáles" required>
                </div>
                <div class="form-group col-4">
                    <label for="id_provincia">PROVINCIA</label>
                    {{--<input type="text" class="form-control" id="id_provincia" name="id_provincia">--}}
                    <select class="custom-select" id="id_provincia" name="id_provincia" required>
                        <option selected disabled value="">Seleccione una Provincia</option>
                        @foreach($provincias as $provincia)
                            <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
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
                    <label for="id_categoria">CATEGORÍA</label>
                    {{--<input type="text" class="form-control" id="id_categoria" name="id_categoria">--}}
                    <select class="custom-select" id="id_categoria" name="id_categoria" required>
                        <option selected disabled value="">Seleccione una Categoría</option>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-12">
                    <label for="descripcion">DESCRIPCION</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                </div>
                <div class="form-group col-4">
                    <label for="id_img_1_p">IMG 1 PEQUEÑA</label>
                    {{--<input type="text" class="form-control" id="id_img_1_p" name="id_img_1_p">--}}
                    <select class="custom-select" id="id_img_1_p" name="id_img_1_p" required>
                        <option selected disabled value="">Seleccione una Imagen</option>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="id_img_1_m">IMG 1 MEDIANA</label>
                   {{-- <input type="text" class="form-control" id="id_img_1_m" name="id_img_1_m">--}}
                    <select class="custom-select" id="id_img_1_m" name="id_img_1_m" required>
                        <option selected disabled value="">Seleccione una Imagen</option>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="id_img_1_g">IMG 1 GRANDE</label>
                    {{--<input type="text" class="form-control" id="id_img_1_g" name="id_img_1_g">--}}
                    <select class="custom-select" id="id_img_1_g" name="id_img_1_g" required>
                        <option selected disabled value="">Seleccione una Imagen</option>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="id_img_2_p">IMG 2 PEQUEÑA</label>
                    {{--<input type="text" class="form-control" id="id_img_2_p" name="id_img_2_p">--}}
                    <select class="custom-select" id="id_img_2_p" name="id_img_2_p" required>
                        <option selected disabled value="">Seleccione una Imagen</option>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="id_img_2_m">IMG 2 MEDIANA</label>
                    {{--<input type="text" class="form-control" id="id_img_2_m" name="id_img_2_m">--}}
                    <select class="custom-select" id="id_img_2_m" name="id_img_2_m" required>
                        <option selected disabled value="">Seleccione una Imagen</option>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="id_img_2_g">IMG 2 GRANDE</label>
                    {{--<input type="text" class="form-control" id="id_img_2_g" name="id_img_2_g">--}}
                    <select class="custom-select" id="id_img_2_g" name="id_img_2_g" required>
                        <option selected disabled value="">Seleccione una Imagen</option>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="id_img_3_p">IMG 3 PEQUEÑA</label>
                    {{--<input type="text" class="form-control" id="id_img_3_p" name="id_img_3_p">--}}
                    <select class="custom-select" id="id_img_3_p" name="id_img_3_p" required>
                        <option selected disabled value="">Seleccione una Imagen</option>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="id_img_3_m">IMG 3 MEDIANA</label>
                    {{--<input type="text" class="form-control" id="id_img_3_m" name="id_img_3_m">--}}
                    <select class="custom-select" id="id_img_3_m" name="id_img_3_m" required>
                        <option selected disabled value="">Seleccione una Imagen</option>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="id_img_3_g">IMG 3 GRANDE</label>
                    {{--<input type="text" class="form-control" id="id_img_3_g" name="id_img_3_g">--}}
                    <select class="custom-select" id="id_img_3_g" name="id_img_3_g" required>
                        <option selected disabled value="">Seleccione una Imagen</option>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-2">
                    <label for="destacado">DESTACADO</label>
                    {{--<input type="text" class="form-control" id="destacado" name="destacado">--}}
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="destacado" id="destacado_si" value="1" required>
                        <label class="form-check-label" for="destacado_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="destacado" id="destacado_no" value="0" required>
                        <label class="form-check-label" for="destacado_no">NO</label>
                    </div>
                </div>
                <div class="form-group col-2">
                    <label for="destacado_orden">DESTACADO ORDEN</label>
                    {{--<input type="text" class="form-control" id="destacado_orden" name="destacado_orden">--}}
                    <select class="custom-select" id="destacado_orden" name="destacado_orden" required>
                        <option selected default value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group col-2" >
                    <label for="nuevo">NUEVO</label>
                    {{--<input type="text" class="form-control" id="nuevo" name="nuevo">--}}
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="nuevo" id="nuevo_si" value="1" required>
                        <label class="form-check-label" for="nuevo_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="nuevo" id="nuevo_no" value="0" required>
                        <label class="form-check-label" for="nuevo_no">NO</label>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="Tamano">TAMAÑO</label>
                    <input type="text" class="form-control" id="Tamano" name="Tamano" onkeyup="comprobacionTamano();" placeholder="ø en cm" required>
                </div>
                <div class="form-group col-3">
                    <label for="peso">PESO</label>
                    <input type="text" class="form-control" id="peso" name="peso" onkeyup="comprobacionPeso();" placeholder="En Kg y con 2 decimales" required>
                </div>
                <div class="form-group col-3">
                    <label for="blanco">BLANCO</label>
                   {{-- <input type="text" class="form-control" id="blanco" name="blanco">--}}
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="blanco" id="blanco_si" value="1" required>
                        <label class="form-check-label" for="blanco_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="blanco" id="blanco_no" value="0" required>
                        <label class="form-check-label" for="blanco_no">NO</label>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="rojo">ROJO</label>
                    {{--<input type="text" class="form-control" id="rojo" name="rojo">--}}
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rojo" id="rojo_si" value="1" required>
                        <label class="form-check-label" for="rojo_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rojo" id="rojo_no" value="0" required>
                        <label class="form-check-label" for="rojo_no">NO</label>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="rosa">ROSA</label>
                    {{--<input type="text" class="form-control" id="rosa" name="rosa">--}}
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rosa" id="rosa_si" value="1" required>
                        <label class="form-check-label" for="rosa_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="rosa" id="rosa_no" value="0" required>
                        <label class="form-check-label" for="rosa_no">NO</label>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label for="variado">VARIADO</label>
                    {{--<input type="text" class="form-control" id="variado" name="variado">--}}
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="variado" id="variado_si" value="1" required>
                        <label class="form-check-label" for="variado_si">SI </label><br>
                    </div>
                    <div class="ml-3">
                        <input class="form-check-input" type="radio" name="variado" id="variado_no" value="0" required>
                        <label class="form-check-label" for="variado_no">NO</label>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="texto_seo">TEXTO_SEO</label>
                    <input type="text" class="form-control" id="texto_seo" name="texto_seo">
                </div>
                <div class="form-group col-12">
                    <label for="title">TITLE</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group col-12">
                    <label for="metatitle">METATITLE</label>
                    <input type="text" class="form-control" id="metatitle" name="metatitle">
                </div>
                <div class="form-group col-12">
                    <label for="metadesc">METADESC</label>
                    <input type="text" class="form-control" id="metadesc" name="metadesc">
                </div>
                <div class="form-group col-12">
                    <label for="keywords">KEYWORDS</label>
                    <input type="text" class="form-control" id="keywords" name="keywords">
                </div>


            </div>

            <div class="row d-flex justify-content-center">
                <div>
                    <button type="submit" class="btn btn-primary" name="add">Añadir</button>
                </div>
            </div>

        </form>

    </div>

    <script src="{{URL::asset('js/comprobaciones.js')}}"></script>

@endsection
