<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaciones = Asignacion::paginate(20);
        return view('asignaciones',['asignaciones' => $asignaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();

        return view('asignacion_create',['productos'=> $productos,'categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignacion = new Asignacion();

        $asignacion->id_producto = request('id_producto');
        $asignacion->id_categoria = request('id_categoria');
        $asignacion->orden_web = request('orden_web');
        $asignacion->title = request('title');
        $asignacion->metatitle = request('metatitle');
        $asignacion->metadesc = request('metadesc');
        $asignacion->keywords = request('keywords');

        $asignacion->save();

        return redirect('/asignaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignaciones = Asignacion::find($id);

        return view('asignacion_detalle',['asignaciones' => $asignaciones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $asignacion = Asignacion::find($id);
        $productos = Producto::all();
        $categorias = Categoria::all();

        /* selecciona campos de porductos y la referencia de asignaciones para la lista desplegable
            select a.id,a.id_producto,a.id_categoria,p.referencia
            from productos p ,asignacions a
            where a.id_producto = p.id;

          */

        $referencias = DB::table('asignacions')
            ->join('productos', 'asignacions.id_producto', '=', 'productos.id')
            ->select('asignacions.*', 'productos.referencia')
            ->get();

        $nombre_categorias = DB::table('asignacions')
            ->join('categorias', 'asignacions.id_categoria', '=', 'categorias.id')
            ->select('asignacions.*', 'categorias.nombre')
            ->get();

        return view('asignacion_edit', ['asignacion' => $asignacion,'productos'=> $productos,'categorias'=>$categorias,'referencias'=>$referencias,'nombre_categorias'=>$nombre_categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asignacion = Asignacion::find($id);

        $asignacion->id_producto = request('id_producto');
        $asignacion->id_categoria = request('id_categoria');
        $asignacion->orden_web = request('orden_web');
        $asignacion->title = request('title');
        $asignacion->metatitle = request('metatitle');
        $asignacion->metadesc = request('metadesc');
        $asignacion->keywords = request('keywords');

        $asignacion->save();

        return redirect('/asignaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asignacion::destroy($id);
        $asignaciones = Asignacion::all();
        return redirect('/asignaciones');
    }
}
