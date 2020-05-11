@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Edición del <i class="fas fa-seedling"></i> PRODUCTO {{$producto->referencia}} </h1>


        <form action="/productos/{{$producto->id}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-1 ">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$producto->id}}" disabled>
                </div>
                <br>
                <div class="form-group col-2 ">
                    <label for="referencia">REFERENCIA</label>
                    <input type="text" class="form-control" id="referencia" name="referencia"
                           value="{{$producto->referencia}}" required>
                </div>
                {{-- <div class="form-group">
                     <label for="nombre">NOMBRE</label>
                     <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}">
                 </div>--}}
                <div class="form-group col-4">
                    <label for="nombre">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}"
                           required>
                </div>
                {{-- <div class="form-group">
                     <label for="precio">PRECIO</label>
                     <input type="text" class="form-control" id="precio" name="precio" value="{{$producto->precio}}">
                 </div>--}}
                <div class="form-group col-2">
                    <label for="precio">PRECIO</label>
                    <input type="text" class="form-control" id="precio" name="precio" value="{{$producto->precio}}"
                           onkeyup="comprobacionPrecio();" placeholder="Nº entero o 2 decimáles" required>
                </div>
                {{--<div class="form-group">
                    <label for="descuento">DESCUENTO</label>
                    <input type="text" class="form-control" id="descuento" name="descuento" value="{{$producto->descuento}}">
                </div>--}}
                <div class="form-group col-1">
                    <label for="descuento">DESCUENTO</label>
                    <input type="text" class="form-control" id="descuento" name="descuento"
                           value="{{$producto->descuento}}" onkeyup="comprobacionDescuento();" placeholder="0-100"
                           required>
                </div>
                {{--<div class="form-group">
                    <label for="precio_proveedor">PRECIO PROVEEDOR</label>
                    <input type="text" class="form-control" id="precio_proveedor" name="precio_proveedor" value="{{$producto->precio_proveedor}}">
                </div>--}}
                <div class="form-group col-2">
                    <label for="precio_proveedor">PRECIO PROVEEDOR</label>
                    <input type="text" class="form-control" id="precio_proveedor" name="precio_proveedor"
                           value="{{$producto->precio_proveedor}}" onkeyup="comprobacionPrecioProveedor();"
                           placeholder="Nº entero o 2 decimáles" required>
                </div>
                {{-- <div class="form-group">
                     <label for="id_provincia">ID PROVINCIA</label>
                     <input type="text" class="form-control" id="id_provincia" name="id_provincia" value="{{$producto->id_provincia}}">
                 </div>--}}
                <div class="form-group col-4">
                    <label for="id_provincia">PROVINCIA</label>
                    {{--<input type="text" class="form-control" id="id_provincia" name="id_provincia">--}}
                    <select class="custom-select" id="id_provincia" name="id_provincia" required>
                        {{-- <option selected  value="{{$festivo->id_provincia}}"></option>--}}
                        @foreach($provincias as $provincia)
                            <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="form-group">
                     <label for="id_poblacion">ID POBLACION</label>
                     <input type="text" class="form-control" id="id_poblacion" name="id_poblacion" value="{{$producto->id_poblacion}}">
                 </div>--}}
                <div class="form-group col-4">
                    <label for="id_poblacion">POBLACION</label>
                    {{--<input type="text" class="form-control" id="id_provincia" name="id_provincia">--}}
                    <select class="custom-select" id="id_poblacion" name="id_poblacion" required>
                        @foreach($poblaciones as $poblacion)
                            <option value="{{$poblacion->id}}">{{$poblacion->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="form-group">
                     <label for="id_categoria">ID CATEGORIA</label>
                     <input type="text" class="form-control" id="id_categoria" name="id_categoria" value="{{$producto->id_categoria}}">
                 </div>--}}
                <div class="form-group col-4">
                    <label for="id_categoria">CATEGORÍA</label>
                    {{--<input type="text" class="form-control" id="id_provincia" name="id_provincia">--}}
                    <select class="custom-select" id="id_categoria" name="id_categoria" required>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                {{--<div class="form-group">
                    <label for="descripcion">DESCRIPCION</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$producto->descripcion}}">
                </div>--}}
                <div class="form-group col-12">
                    <label for="descripcion">DESCRIPCION</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion"
                           value="{{$producto->descripcion}}" required>
                </div>
                {{-- <div class="form-group">
                     <label for="id_img_1_p">ID IMG 1 P</label>
                     <input type="text" class="form-control" id="id_img_1_p" name="id_img_1_p" value="{{$producto->id_img_1_p}}">
                 </div>--}}
                <div class="form-group col-4">
                    <label for="id_img_1_p">IMG 1 PEQUEÑA</label>
                    {{--<input type="text" class="form-control" id="id_img_1_p" name="id_img_1_p">--}}
                    <select class="custom-select" id="id_img_1_p" name="id_img_1_p" required>
                        @foreach($imagenes as $imagene)
                            <option value="{{$imagene->id}}">{{$imagene->ruta}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="form-group">
                     <label for="id_img_1_m">ID IMG 1 M</label>
                     <input type="text" class="form-control" id="id_img_1_m" name="id_img_1_m" value="{{$producto->id_img_1_m}}">
                 </div>--}}
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
                {{--<div class="form-group">
                    <label for="id_img_1_g">ID IMG 1 G</label>
                    <input type="text" class="form-control" id="id_img_1_g" name="id_img_1_g" value="{{$producto->id_img_1_g}}">
                </div>--}}
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
                {{--<div class="form-group">
                    <label for="id_img_2_p">ID IMG 2 P</label>
                    <input type="text" class="form-control" id="id_img_2_p" name="id_img_2_p" value="{{$producto->id_img_2_p}}">
                </div>--}}
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
                {{--<div class="form-group">
                    <label for="id_img_2_m">ID IMG 2 M</label>
                    <input type="text" class="form-control" id="id_img_2_m" name="id_img_2_m" value="{{$producto->id_img_2_m}}">
                </div>--}}
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
                {{--<div class="form-group">
                    <label for="id_img_2_g">ID IMG 2 G</label>
                    <input type="text" class="form-control" id="id_img_2_g" name="id_img_2_g" value="{{$producto->id_img_2_g}}">
                </div>--}}
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
                {{-- <div class="form-group">
                     <label for="id_img_3_p">ID IMG 3 P</label>
                     <input type="text" class="form-control" id="id_img_3_p" name="id_img_3_p" value="{{$producto->id_img_3_p}}">
                 </div>--}}
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
                {{-- <div class="form-group">
                     <label for="id_img_3_m">ID IMG 3 M</label>
                     <input type="text" class="form-control" id="id_img_3_m" name="id_img_3_m" value="{{$producto->id_img_3_m}}">
                 </div>--}}
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
                {{--<div class="form-group">
                    <label for="id_img_3_g">ID IMG 3 G</label>
                    <input type="text" class="form-control" id="id_img_3_g" name="id_img_3_g" value="{{$producto->id_img_3_g}}">
                </div>--}}
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
                {{--<div class="form-group">
                    <label for="destacado">DESTACADO</label>
                    <input type="text" class="form-control" id="destacado" name="destacado" value="{{$producto->destacado}}">
                </div>--}}
                <div class="form-group col-2">
                    <p>DESTACADO</p>
                    @if($producto->destacado == 1)
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="destacado" id="destacado_si" value="1"
                                   required
                                   checked>
                            <label class="form-check-label" for="destacado_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="destacado" id="destacado_no" value="0"
                                   required>
                            <label class="form-check-label" for="destacado_no">NO</label>
                        </div>

                    @else
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="destacado" id="destacado_si" value="1"
                                   required>
                            <label class="form-check-label" for="destacado_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="destacado" id="destacado_no" value="0"
                                   required
                                   checked>
                            <label class="form-check-label" for="destacado_no">NO</label>
                        </div>
                    @endif
                </div>
                {{--       <div class="form-group">
                           <label for="destacado_orden">DESTACADO ORDEN</label>
                           <input type="text" class="form-control" id="destacado_orden" name="destacado_orden" value="{{$producto->destacado_orden}}">
                       </div>--}}
                <div class="form-group col-2">
                    <label for="destacado_orden">DESTACADO ORDEN</label>
                    <select class="custom-select" id="destacado_orden" name="destacado_orden" required>
                        <option selected default
                                value="{{$producto->destacado_orden}}">{{$producto->destacado_orden}}</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                {{--<div class="form-group">
                     <label for="nuevo">NUEVO</label>
                     <input type="text" class="form-control" id="nuevo" name="nuevo" value="{{$producto->nuevo}}">
                 </div>--}}
                <div class="form-group col-2">
                    <p>NUEVO</p>
                    @if($producto->nuevo == 1)
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="nuevo" id="nuevo_si" value="1" required
                                   checked>
                            <label class="form-check-label" for="nuevo_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="nuevo" id="nuevo_no" value="0" required>
                            <label class="form-check-label" for="nuevo_no">NO</label>
                        </div>

                    @else
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="nuevo" id="nuevo_si" value="1" required>
                            <label class="form-check-label" for="nuevo_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="nuevo" id="nuevo_no" value="0" required
                                   checked>
                            <label class="form-check-label" for="nuevo_no">NO</label>
                        </div>
                    @endif
                </div>
                {{-- <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="text" class="form-control" id="peso" name="peso" value="{{$producto->peso}}">
                </div>--}}
                <div class="form-group col-3">
                    <label for="Tamano">TAMAÑO</label>
                    <input type="text" class="form-control" id="Tamano" name="Tamano" value="{{$producto->peso}}"
                           onkeyup="comprobacionTamano();" placeholder="ø en cm" required>
                </div>
                {{--<div class="form-group">
               <label for="Tamano">Tamaño</label>
               <input type="text" class="form-control" id="Tamano" name="Tamano" value="{{$producto->Tamano}}">
           </div>--}}
                <div class="form-group col-3">
                    <label for="peso">PESO</label>
                    <input type="text" class="form-control" id="peso" name="peso" value="{{$producto->Tamano}}"
                           onkeyup="comprobacionPeso();" placeholder="En Kg y con 2 decimales" required>
                </div>

                {{--<div class="form-group">
                    <label for="blanco">BLANCO</label>
                    <input type="text" class="form-control" id="blanco" name="blanco" value="{{$producto->blanco}}">
                </div>--}}
                <div class="form-check col-3">
                    <p>BLANCO</p>
                    @if($producto->blanco == 1)
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="blanco" id="blanco_si" value="1" required
                                   checked>
                            <label class="form-check-label" for="blanco_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="blanco" id="blanco_no" value="0"
                                   required>
                            <label class="form-check-label" for="blanco_no">NO</label>
                        </div>

                    @else
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="blanco" id="blanco_si" value="1"
                                   required>
                            <label class="form-check-label" for="blanco_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="blanco" id="blanco_no" value="0" required
                                   checked>
                            <label class="form-check-label" for="blanco_no">NO</label>
                        </div>
                    @endif
                </div>
                {{-- <div class="form-group">
                     <label for="rojo">ROJO</label>
                     <input type="text" class="form-control" id="rojo" name="rojo" value="{{$producto->rojo}}">
                 </div>--}}
                <div class="form-group col-3">
                    <p>ROJO</p>
                    @if($producto->rojo == 1)
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
                {{--        <div class="form-group">
                            <label for="rosa">ROSA</label>
                            <input type="text" class="form-control" id="rosa" name="rosa" value="{{$producto->rosa}}">
                        </div>--}}
                <div class="form-group col-3">
                    <p>ROSA</p>
                    @if($producto->rosa == 1)
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
                {{-- <div class="form-group">
                     <label for="variado">VARIADO</label>
                     <input type="text" class="form-control" id="variado" name="variado" value="{{$producto->variado}}">
                 </div>--}}
                <div class="form-group col-3">
                    <p>VARIADO</p>
                    @if($producto->variado == 1)
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="variado" id="variado_si" value="1"
                                   required
                                   checked>
                            <label class="form-check-label" for="variado_si">SI </label><br>
                        </div>
                        <div class="ml-3">
                            <input class="form-check-input" type="radio" name="variado" id="variado_no" value="0"
                                   required>
                            <label class="form-check-label" for="variado_no">NO</label>
                        </div>

                    @else
                        <div class="form-group col-2">
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
                {{--<div class="form-group">
                    <label for="texto_seo">TEXTO_SEO</label>
                    <input type="text" class="form-control" id="texto_seo" name="texto_seo" value="{{$producto->texto_seo}}">
                </div>--}}
                <div class="form-group col-12">
                    <label for="texto_seo">TEXTO_SEO</label>
                    <input type="text" class="form-control" id="texto_seo" name="texto_seo"
                           value="{{$producto->texto_seo}}" required>
                </div>

                {{-- <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" class="form-control" id="title" name="title" value="{{$producto->title}}">
                 </div>--}}
                <div class="form-group col-12">
                    <label for="title">TITLE</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$producto->title}}"
                           required>
                </div>

                {{-- <div class="form-group">
                     <label for="metatitle">METATITLE</label>
                     <input type="text" class="form-control" id="metatitle" name="metatitle" value="{{$producto->metatitle}}">
                 </div>--}}
                <div class="form-group col-12">
                    <label for="metatitle">METATITLE</label>
                    <input type="text" class="form-control" id="metatitle" name="metatitle"
                           value="{{$producto->metatitle}}" required>
                </div>

                {{--<div class="form-group">
                    <label for="metadesc">METADESC</label>
                    <input type="text" class="form-control" id="metadesc" name="metadesc" value="{{$producto->metadesc}}">
                </div>--}}
                <div class="form-group col-12">
                    <label for="metadesc">METADESC</label>
                    <input type="text" class="form-control" id="metadesc" name="metadesc"
                           value="{{$producto->metadesc}}" required>
                </div>

                {{-- <div class="form-group">
                     <label for="keywords">KEYWORDS</label>
                     <input type="text" class="form-control" id="keywords" name="keywords" value="{{$producto->keywords}}">
                 </div>--}}
                <div class="form-group col-12">
                    <label for="keywords">KEYWORDS</label>
                    <input type="text" class="form-control" id="keywords" name="keywords"
                           value="{{$producto->keywords}}" required>
                </div>


            </div>

            <div class="row d-flex justify-content-center">
                <div>
                    <button type="submit" class="btn btn-warning " name="add">Modificar</button>
                </div>
            </div>

            </form>

        </div>


        <script src="{{URL::asset('js/comprobaciones.js')}}"></script>
@endsection
