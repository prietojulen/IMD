@extends('layout')
@section('content')
    <h1 class="text-center"> <i class="fas fa-ellipsis-h"></i> CATEGORÍAS </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">ID_IMAGEN</th>
            <th scope="col">TEXTO_SEO</th>
            <th scope="col">TITLE</th>
            <th scope="col">METATITLE</th>
            <th scope="col">METADESC</th>
            <th scope="col">KEYWORDS</th>
            <th scope="col">OPCIONES <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->id_imagen}}</td>
            <td>{{$categoria->texto_seo}}</td>
            <td>{{$categoria->title}}</td>
            <td>{{$categoria->metatitle}}</td>
            <td>{{$categoria->metadesc}}</td>
            <td>{{$categoria->keywords}}</td>
            <td><a href="/categorias/{{$categoria->id}}"title="VER"><i class="far fa-eye"></i></a></a><br>
                <a href="/categorias/{{$categoria->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a class="btn disabled borrar" href="/categorias/{{$categoria->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$categorias->links()}}
        </div>
    </div>
    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

@endsection
