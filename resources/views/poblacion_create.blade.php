@extends('layout')
@section('content')
    <h1>POBLACION Nueva</h1>



    <form action="/poblaciones" method="post">
        @csrf

        <div class="form-group">
            <label for="nombre">ID PROVINCIA</label>
            <input type="text" class="form-control" id="id_provincia" name="id_provincia" >
        </div>
        <div class="form-group">
            <label for="nombre">NOMBRE</label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
        </div>
        <div class="form-group">
            <label for="nombre2i">NOMBRE2</label>
            <input type="text" class="form-control" id="nombre2i" name="nombre2i" >
        </div>
        <div class="form-group">
            <label for="coletilla">COLETILLA</label>
            <input type="text" class="form-control" id="coletilla" name="coletilla" >
        </div>
        <div class="form-group">
            <label for="capital">CAPITAL</label>
            <input type="text" class="form-control" id="capital" name="capital" >
        </div>
        <div class="form-group">
            <label for="portes">PORTES</label>
            <input type="text" class="form-control" id="portes" name="portes" >
        </div>
        <button type="submit" class="btn btn-primary" name="add" >Añadir</button>

    </form>





@endsection
