<?php

namespace App\Http\Controllers;

use App\Festivo;
use App\Imagen;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = Imagen::paginate(20);
        return view('imagenes',['imagenes' => $imagenes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imagen_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = new Imagen();

        $imagen->ruta = request('ruta');
        $imagen->blanco = request('blanco');
        $imagen->rojo = request('rojo');
        $imagen->rosa = request('rosa');
        $imagen->variado = request('variado');


        $imagen->save();

        return redirect('/imagenes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagenes = Imagen::find($id);

        return view('imagen_detalle',['imagenes' => $imagenes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imagen = Imagen::find($id);

        return view('imagen_edit', ['imagen' => $imagen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $imagen = Imagen::find($id);
        $imagen->ruta = request('ruta');
        $imagen->blanco = request('blanco');
        $imagen->rojo = request('rojo');
        $imagen->rosa = request('rosa');
        $imagen->variado = request('variado');

        $imagen->save();

        return redirect('/imagenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imagen::destroy($id);
        $imagenes = Imagen::all();
        return redirect('/imagenes');
    }
}
