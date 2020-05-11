<?php

namespace App\Http\Controllers;

use App\Imagen;
use App\Llamame;
use Illuminate\Http\Request;

class LlamameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $llamames = Llamame::paginate(20);
        return view('llamame',['llamames' => $llamames]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('llamame_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $llamame = new Llamame();

        $llamame->nombre = request('nombre');
        $llamame->telefono = request('telefono');
        $llamame->fecha_peticion = request('fecha_peticion');
        $llamame->hora_peticion = request('hora_peticion');

        $llamame->save();

        return redirect('/llamame');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Llamame  $llamame
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $llamames = Llamame::find($id);

        return view('llamame_detalle',['llamame' => $llamames]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Llamame  $llamame
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $llamame = Llamame::find($id);

        return view('llamame_edit', ['llamame' => $llamame]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Llamame  $llamame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $llamame = Llamame::find($id);
        $llamame->nombre = request('nombre');
        $llamame->telefono = request('telefono');
        $llamame->fecha_peticion = request('fecha_peticion');
        $llamame->hora_peticion = request('hora_peticion');

        $llamame->save();

        return redirect('/llamame');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Llamame  $llamame
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Llamame::destroy($id);
        $llamames = Llamame::all();
        return redirect('/llamame');
    }
}
