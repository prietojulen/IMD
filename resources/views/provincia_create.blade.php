@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center"> <i class="far fa-map"></i> PROVINCIA Nueva </h1>



    <form action="/provincias" method="post">
        @csrf

        <div class="form-group">
            <label for="nombre">NOMBRE</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="row d-flex justify-content-center">
            <div>
                <button type="submit" class="btn btn-primary" name="add">Añadir</button>
            </div>
        </div>


    </form>



</div>

@endsection
