@extends('layout')
@section('content')
    <h1>PEDIDOS </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NUMERO PEDIDO</th>
            <th scope="col">FECHA</th>
            <th scope="col">CODIGO PRODUCTO</th>
            <th scope="col">NOMBRE FALLECIDO</th>
            <th scope="col">IMPORTE</th>
            <th scope="col">OPCIONES</th>

        </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
        <tr>
            <td>{{$pedido->id}}</td>
            <td>{{$pedido->numero_pedido}}</td>
            <td>{{$pedido->fecha_pedido}}</td>
            <td>{{$pedido->codigo_producto}}</td>
            <td>{{$pedido->nombre_fallecido}}</td>
            <td>{{$pedido->importe}}</td>
            <td><a href="/pedidos/{{$pedido->id}}"title="VER"><i class="far fa-eye"></i></a></a><br>
                <a href="/pedidos/{{$pedido->id}}/edit"title="EDITAR"><i class="far fa-edit"></i></a><br>
                <a href="/pedidos/{{$pedido->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection
