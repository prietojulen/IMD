@extends('layout')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Edición de la <i class="far fa-map"></i> PROVINCIA {{$provincia->nombre}} </h1>


        <form action="/provincias/{{$provincia->id}}" method="post">
            @csrf
            <div class="form-row">


                <div class="form-group col-2">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$provincia->id}}" disabled>
                </div>
                <div class="form-group col-10">
                    <label for="nombre">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$provincia->nombre}}"
                           required>
                </div>

            </div>
                <div class="row d-flex justify-content-center">
                    <div>
                        <button type="submit" class="btn btn-warning " name="add">Modificar</button>
                    </div>
                </div>

        </form>

    </div>



@endsection
