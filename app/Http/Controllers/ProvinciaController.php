<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincias = Provincia::paginate(20);
        return view('provincias',['provincias' => $provincias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provincia_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provincia = new Provincia();

        $provincia->id = request('id');
        $provincia->nombre = request('nombre');

        $provincia->save();

        return redirect('/provincias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provincias = Provincia::find($id);

        return view('provincia_detalle',['provincias' => $provincias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provincia = Provincia::find($id);

        return view('provincia_edit', ['provincia' => $provincia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $provincia = Provincia::find($id);
        $provincia->id = request('id');
        $provincia->nombre = request('nombre');

        $provincia->save();

        return redirect('/provincias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Provincia::destroy($id);
        $provincias = Provincia::all();
        return redirect('/provincias');
    }
}
