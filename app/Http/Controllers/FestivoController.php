<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Festivo;
use App\Poblacion;
use App\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FestivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $festivos = Festivo::paginate(20);
        return view('festivos',['festivos' => $festivos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $povincias = Provincia::all();

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


        //$poblaciones = Poblacion::all();

        return view('festivo_create',['provincias'=>$povincias,'poblaciones'=>$poblaciones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $festivo = new Festivo();

        $festivo->nombre = request('nombre');
        $festivo->fecha = request('fecha');
        $festivo->id_provincia = request('id_provincia');
        $festivo->id_poblacion = request('id_poblacion');
        $festivo->tipo = request('tipo');


        $festivo->save();

        return redirect('/festivos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Festivo  $festivo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $festivos = Festivo::find($id);
        $provincias = Provincia::all();

        return view('festivo_detalle',['festivos' => $festivos,"provincias"=>$provincias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Festivo  $festivo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $festivo = Festivo::find($id);
        $provincias = Provincia::all();
        //$poblacion = Poblacion::all();

        $poblaciones = DB::table('poblacions')
            ->join('provincias', 'poblacions.id_provincia', '=', 'provincias.id')
            ->select('poblacions.id', 'provincias.id','poblacions.nombre')
            ->get();

        return view('festivo_edit', ['festivo' => $festivo,'provincias'=>$provincias,'poblaciones'=>$poblaciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Festivo  $festivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $festivo = Festivo::find($id);

        $festivo->nombre = request('nombre');
        $festivo->fecha = request('fecha');
        $festivo->id_provincia = request('id_provincia');
        $festivo->id_poblacion = request('id_poblacion');
        $festivo->tipo = request('tipo');


        $festivo->save();

        return redirect('/festivos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Festivo  $festivo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Festivo::destroy($id);
        $festivos = Festivo::all();
        return redirect('/festivos');
    }
}
