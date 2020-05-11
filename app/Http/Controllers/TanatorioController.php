<?php

namespace App\Http\Controllers;

use App\Festivo;
use App\Imagen;
use App\Provincia;
use App\Tanatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TanatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tanatorios = Tanatorio::paginate(20);
        /*$tanatorios = DB::table('tanatorios')->orderBy('id_poblacion','asc')->paginate(20);*/
        $provincias = Provincia::all();
        return view('tanatorios',['tanatorios' => $tanatorios,"provincias"=>$provincias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $povincias = Provincia::all();



        $poblaciones = DB::table('poblacions')
            ->join('provincias', 'poblacions.id_provincia', '=', 'provincias.id')
            ->select('poblacions.id', 'provincias.id','poblacions.nombre')
            ->get();

        return view('tanatorio_create',['provincias'=>$povincias,'poblaciones'=>$poblaciones]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanatorio = new Tanatorio();

        $tanatorio->nombre = request('nombre');
        $tanatorio->calle = request('calle');
        $tanatorio->id_provincia = request('id_provincia');
        $tanatorio->id_poblacion = request('id_poblacion');
        $tanatorio->canon_corona = request('canon_corona');
        $tanatorio->canon_centro = request('canon_centro');
        $tanatorio->canon_ramo = request('canon_ramo');
        $tanatorio->tiene_floristeria = request('tiene_floristeria');
        $tanatorio->email = request('email');
        $tanatorio->prioridad = request('prioridad');
        $tanatorio->visible = request('visible');

        $tanatorio->save();

        return redirect('/tanatorios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tanatorio  $tanatorio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tanatorios = Tanatorio::find($id);

        return view('tanatorio_detalle',['tanatorios' => $tanatorios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tanatorio  $tanatorio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanatorio = Tanatorio::find($id);

        return view('tanatorio_edit', ['tanatorio' => $tanatorio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tanatorio  $tanatorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $tanatorio = Tanatorio::find($id);
        $tanatorio->nombre = request('nombre');
        $tanatorio->calle = request('calle');
        $tanatorio->id_provincia = request('id_provincia');
        $tanatorio->id_poblacion = request('id_poblacion');
        $tanatorio->canon_corona = request('canon_corona');
        $tanatorio->canon_centro = request('canon_centro');
        $tanatorio->canon_ramo = request('canon_ramo');
        $tanatorio->tiene_floristeria = request('tiene_floristeria');
        $tanatorio->email = request('email');
        $tanatorio->prioridad = request('prioridad');
        $tanatorio->visible = request('visible');

        $tanatorio->save();

        return redirect('/tanatorios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tanatorio  $tanatorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tanatorio::destroy($id);
        $tanatorios = Tanatorio::all();
        return redirect('/tanatorios');
    }
}
