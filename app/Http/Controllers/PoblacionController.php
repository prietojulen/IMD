<?php

namespace App\Http\Controllers;

use App\Poblacion;
use App\Producto;
use App\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoblacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $poblaciones = Poblacion::paginate(50);
        /*$poblaciones = DB::table('poblacions')->where('id_provincia','=',1)->paginate(50);*/
        $provincias = Provincia::all();
        return view('poblaciones',['poblaciones' => $poblaciones,'provincias'=>$provincias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poblacion_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poblacion = new Poblacion();

        $poblacion->id_provincia = request('id_provincia');
        $poblacion->nombre = request('nombre');
        $poblacion->nombre2i = request('nombre2i');
        $poblacion->coletilla = request('coletilla');
        $poblacion->capital = request('capital');
        $poblacion->portes = request('portes');

        $poblacion->save();

        return redirect('/poblaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poblaciones = Poblacion::find($id);
        $productos = Producto::all()->where('id','=',$id);
        $provincias = Provincia::all();
        return view('poblacion_detalle',['poblaciones' => $poblaciones,'productos'=>$productos,"provincias"=>$provincias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poblacion = Poblacion::find($id);
        $provincias = Provincia::all();

        return view('poblacion_edit', ['poblacion' => $poblacion,'provincias'=>$provincias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $poblacion = Poblacion::find($id);
        $poblacion->id_provincia = request('id_provincia');
        $poblacion->nombre = request('nombre');
        $poblacion->nombre2i = request('nombre2i');
        $poblacion->coletilla = request('coletilla');
        $poblacion->capital = request('capital');
        $poblacion->portes = request('portes');

        $poblacion->save();

        return redirect('/poblaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Poblacion::destroy($id);
        $poblaciones = Poblacion::all();
        return redirect('/poblaciones');
    }


}
