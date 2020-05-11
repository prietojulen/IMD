@extends('layout')
@section('content')
    <h1 class="text-center">Detalle de <i class="fas fa-ellipsis-h"></i> CATEGORÍA {{$categorias->nombre}} </h1>

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
            <th scope="col">EDITAR</th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$categorias->id}}</td>
                <td>{{$categorias->nombre}}</td>
                <td>{{$categorias->id_imagen}}</td>
                <td>{{$categorias->texto_seo}}</td>
                <td>{{$categorias->title}}</td>
                <td>{{$categorias->metatitle}}</td>
                <td>{{$categorias->metadesc}}</td>
                <td>{{$categorias->keywords}}</td>
                <td> <a href="/categorias/{{$categorias->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                    <a href="/categorias/{{$categorias->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a></td>

            </tr>

        </tbody>
    </table>


@endsection
