@extends('layout')
@section('content')
    <h1 class="text-center"> <i class="fas fa-truck"></i> PEDIDOS </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NUMERO PEDIDO</th>
            <th scope="col">FECHA</th>
            <th scope="col">CODIGO PRODUCTO</th>
            <th scope="col">NOMBRE FALLECIDO</th>
            <th scope="col">IMPORTE</th>
            <th scope="col">OPCIONES <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>

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
                <a class="btn disabled borrar" href="/pedidos/{{$pedido->id}}/delete"title="BORRAR"><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$pedidos->links()}}
        </div>
    </div>

    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
