<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categoria::paginate(20);

        return view('categorias',['categorias' => $categorias]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imagenes = Imagen::all();

        return view('categoria_create',['imagenes'=>$imagenes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();

        $categoria->id = request('id');
        $categoria->nombre = request('nombre');
        $categoria->id_imagen = request('id_imagen');
        $categoria->texto_seo = request('texto_seo');
        $categoria->title = request('title');
        $categoria->metatitle = request('metatitle');
        $categoria->metadesc = request('metadesc');
        $categoria->keywords = request('keywords');

        $categoria->save();

        return redirect('/categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias = Categoria::find($id);

        return view('categoria_detalle',['categorias' => $categorias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categoria = Categoria::find($id);
        $imagenes = Imagen::all();

        $rutas = DB::table('categorias')
            ->join('imagens', 'categorias.id_imagen', '=', 'imagens.id')
            ->select('categorias.*', 'imagens.ruta')
            ->get();

        return view('categoria_edit', ['categoria' => $categoria,'rutas'=>$rutas,'imagenes'=>$imagenes]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $categoria = Categoria::find($id);

        $categoria->nombre = request('nombre');
        $categoria->id_imagen = request('id_imagen');
        $categoria->texto_seo = request('texto_seo');
        $categoria->title = request('title');
        $categoria->metatitle = request('metatitle');
        $categoria->metadesc = request('metadesc');
        $categoria->keywords = request('keywords');

        $categoria->save();

        return redirect('/categorias');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::destroy($id);
        $categorias = Categoria::all();
        return redirect('/categorias');
    }
}
