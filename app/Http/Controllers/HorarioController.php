<?php

namespace App\Http\Controllers;

use App\Horario;
use App\Poblacion;
use App\Provincia;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::paginate(20);
        return view('horarios',['horarios' => $horarios]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horario_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario = new Horario();

        $horario->dia_semana = request('dia_semana');
        $horario->hora_salida = request('hora_salida');
        $horario->minuto_salida = request('minuto_salida');

        $horario->save();

        return redirect('/horarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horarios = Horario::find($id);

        return view('horario_detalle',['horarios' => $horarios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::find($id);

        return view('horario_edit', ['horario' => $horario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $horario = Horario::find($id);
        $horario->dia_semana = request('dia_semana');
        $horario->hora_salida = request('hora_salida');
        $horario->minuto_salida = request('minuto_salida');

        $horario->save();

        return redirect('/horarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Horario::destroy($id);
        $horarios = Horario::all();
        return redirect('/horarios');
    }
}
