<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Imagen;
use App\Producto;
use App\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(20);
        return view('productos',['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $povincias = Provincia::all();
        $imagenes = Imagen::all();

        /*selecciona las localidades de la provincia 1
            select *
            from provincias pr,poblacions po
            where pr.id = po.id_provincia
            and pr.id = 1
        */

        $poblaciones = DB::table('poblacions')
            ->join('provincias', 'poblacions.id_provincia', '=', 'provincias.id')
            ->select('poblacions.id', 'provincias.id','poblacions.nombre')
            ->get();



        return view('producto_create',['categorias'=>$categorias,'imagenes'=>$imagenes,'provincias'=>$povincias,'poblaciones'=>$poblaciones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->id = request('id');
        $producto->referencia = request('referencia');
        $producto->nombre = request('nombre');
        $producto->precio = request('precio');
        $producto->descuento = request('descuento');
        $producto->precio_proveedor = request('precio_proveedor');
        $producto->id_provincia = request('id_provincia');
        $producto->id_poblacion = request('id_poblacion');
        $producto->id_categoria = request('id_categoria');
        $producto->descripcion = request('descripcion');
        $producto->id_img_1_p = request('id_img_1_p');
        $producto->id_img_1_m = request('id_img_1_m');
        $producto->id_img_1_g = request('id_img_1_g');
        $producto->id_img_2_p = request('id_img_2_p');
        $producto->id_img_2_m = request('id_img_2_m');
        $producto->id_img_2_g = request('id_img_2_g');
        $producto->id_img_3_p = request('id_img_3_p');
        $producto->id_img_3_m = request('id_img_3_m');
        $producto->id_img_3_g = request('id_img_3_g');
        $producto->destacado = request('destacado');
        $producto->destacado_orden = request('destacado_orden');
        $producto->nuevo = request('nuevo');
        $producto->blanco = request('blanco');
        $producto->rojo = request('rojo');
        $producto->rosa = request('rosa');
        $producto->variado = request('variado');
        $producto->texto_seo = request('texto_seo');
        $producto->title = request('title');
        $producto->metatitle = request('metatitle');
        $producto->metadesc = request('metadesc');
        $producto->keywords = request('keywords');
        $producto->Tamano = request('Tamano');
        $producto->peso = request('peso');


        $producto->save();

        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto_detalle',['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        $povincias = Provincia::all();
        $imagenes = Imagen::all();

        $poblaciones = DB::table('poblacions')
            ->join('provincias', 'poblacions.id_provincia', '=', 'provincias.id')
            ->select('poblacions.id', 'provincias.id','poblacions.nombre')
            ->get();

        return view('producto_edit', ['producto' => $producto,'categorias'=>$categorias,'imagenes'=>$imagenes,'provincias'=>$povincias,'poblaciones'=>$poblaciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->id = request('id');
        $producto->referencia = request('referencia');
        $producto->nombre = request('nombre');
        $producto->precio = request('precio');
        $producto->descuento = request('descuento');
        $producto->precio_proveedor = request('precio_proveedor');
        $producto->id_provincia = request('id_provincia');
        $producto->id_poblacion = request('id_poblacion');
        $producto->id_categoria = request('id_categoria');
        $producto->descripcion = request('descripcion');
        $producto->id_img_1_p = request('id_img_1_p');
        $producto->id_img_1_m = request('id_img_1_m');
        $producto->id_img_1_g = request('id_img_1_g');
        $producto->id_img_2_p = request('id_img_2_p');
        $producto->id_img_2_m = request('id_img_2_m');
        $producto->id_img_2_g = request('id_img_2_g');
        $producto->id_img_3_p = request('id_img_3_p');
        $producto->id_img_3_m = request('id_img_3_m');
        $producto->id_img_3_g = request('id_img_3_g');
        $producto->destacado = request('destacado');
        $producto->destacado_orden = request('destacado_orden');
        $producto->nuevo = request('nuevo');
        $producto->blanco = request('blanco');
        $producto->rojo = request('rojo');
        $producto->rosa = request('rosa');
        $producto->variado = request('variado');
        $producto->texto_seo = request('texto_seo');
        $producto->title = request('title');
        $producto->metatitle = request('metatitle');
        $producto->metadesc = request('metadesc');
        $producto->keywords = request('keywords');
        $producto->Tamano = request('Tamano');
        $producto->peso = request('peso');

        $producto->save();

        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        $producto = Producto::all();
        return redirect('/productos');
    }
}
