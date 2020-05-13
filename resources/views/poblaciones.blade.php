@extends('layout')
@section('content')
    <div class="container-fluid">
    <h1 class="text-center"><i class="fas fa-map-pin"></i> POBLACIONES </h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">PROVINCIA</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">NOMBRE2</th>
            <th scope="col">COLETILLA</th>
            <th scope="col">CAPITAL</th>
            <th scope="col">PORTES</th>
            <th scope="col">OPCIONES <input class="onoff" type="checkbox" data-size="sm" unchecked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border" onchange="desbloquear();"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($poblaciones as $poblacion)
            <tr>
                <td>{{$poblacion->id}}</td>
                {{--<td>{{$poblacion->id_provincia}}</td>--}}
                {{--<td>{{$provincias[($poblacion->id)-1]->nombre}}</td>--}}
                @switch($poblacion->id_provincia)
                    @case(1)
                    <td>Alava</td>
                    @break
                    @case(2)
                    <td>Albacete</td>
                    @break
                    @case(3)
                    <td>Alicante</td>
                    @break
                    @case(4)
                    <td>Almeria</td>
                    @break
                    @case(5)
                    <td>Avila</td>
                    @break
                    @case(6)
                    <td>Badajoz</td>
                    @break
                    @case(8)
                    <td>Barcelona</td>
                    @break
                    @case(9)
                    <td>Burgos</td>
                    @break
                    @case(10)
                    <td>Caceres</td>
                    @break
                    @case(11)
                    <td>Cadiz</td>
                    @break
                    @case(12)
                    <td>Castellon</td>
                    @break
                    @case(13)
                    <td>Ciudad Real</td>
                    @break
                    @case(14)
                    <td>Cordoba</td>
                    @break
                    @case(15)
                    <td>A Coruña</td>
                    @break
                    @case(16)
                    <td>Cuenca</td>
                    @break
                   @case(17)
                    <td>Girona</td>
                    @break
                    @case(18)
                    <td>Granada</td>
                    @break
                    @case(19)
                    <td>Guadalajara</td>
                    @break
                    @case(20)
                    <td>Gipuzcoa</td>
                    @break
                    @case(21)
                    <td>Huelva</td>
                    @break
                    @case(22)
                    <td>Huesca</td>
                    @break
                    @case(23)
                    <td>Jaen</td>
                    @break
                    @case(24)
                    <td>Leon</td>
                    @break
                    @case(25)
                    <td>Lleida</td>
                    @break
                    @case(26)
                    <td>La Rioja</td>
                    @break
                    @case(27)
                    <td>Lugo</td>
                    @break
                    @case(28)
                    <td>Madrid</td>
                    @break
                    @case(29)
                    <td>Malaga</td>
                    @break
                    @case(30)
                    <td>Murcia</td>
                    @break
                    @case(31)
                    <td>Navarra</td>
                    @break
                    @case(32)
                    <td>Ourense</td>
                    @break
                    @case(33)
                    <td>Asturias</td>
                    @break
                    @case(34)
                    <td>Palencia</td>
                    @break
                    @case(36)
                    <td>Pontevedra</td>
                    @break
                    @case(37)
                    <td>Salamanca</td>
                    @break
                    @case(39)
                    <td>Cantabria</td>
                    @break
                    @case(40)
                    <td>Segovia</td>
                    @break
                    @case(41)
                    <td>Sevilla</td>
                    @break
                    @case(42)
                    <td>Soria</td>
                    @break
                    @case(43)
                    <td>Tarragona</td>
                    @break
                    @case(44)
                    <td>Teruel</td>
                    @break
                    @case(45)
                    <td>Toledo</td>
                    @break
                    @case(46)
                    <td>Valencia</td>
                    @break
                    @case(47)
                    <td>Valladolid</td>
                    @break
                    @case(48)
                    <td>Vizcaya</td>
                    @break
                    @case(49)
                    <td>Zamora</td>
                    @break
                    @case(50)
                    <td>Zaragoza</td>
                    @break
                    @case(51)
                    <td>Ceuta</td>
                    @break
                    @case(52)
                    <td>Melilla</td>
                    @break
                    @case(54)
                    <td>Illes Balears Formentera</td>
                    @break
                    @case(55)
                    <td>Illes Balears Ibiza</td>
                    @break
                    @case(56)
                    <td>Illes Balears Mallorca</td>
                    @break
                    @case(57)
                    <td>Illes Balears Menorca</td>
                    @break
                    @case(59)
                    <td>Las Palmas Fuerteventura</td>
                    @break
                    @case(60)
                    <td>Las Palmas Gran Canaria</td>
                    @break
                    @case(61)
                    <td>Santa Cruz de Tenerife El Hierro</td>
                    @break
                    @case(62)
                    <td>Santa Cruz de Tenerife La Gomera</td>
                    @break
                    @case(63)
                    <td>Santa Cruz de Tenerife La Palma</td>
                    @break
                    @case(64)
                    <td>Las Palmas Lanzarote</td>
                    @break
                    @case(65)
                    <td>Santa Cruz de Tenerife Tenerife</td>
                    @break
                    @case(472)
                    <td>Illes Balears Cabrera</td>
                    @break
                    @case(9999)
                    <td>España</td>
                    @break
                    @default
                    <td> Provincia NO definida</td>

                @endswitch
                {{-- <td>{{$poblacion->id_provincia}}</td>--}}
                <td>{{$poblacion->nombre}}</td>
                <td>{{$poblacion->nombre2i}}</td>
                <td>{{$poblacion->coletilla}}</td>
                <td>{{$poblacion->capital}}</td>
                <td>{{$poblacion->portes}}</td>
                <td><a href="/poblaciones/{{$poblacion->id}}" title="VER"><i class="far fa-eye"></i></a></a><br>
                    <a href="/poblaciones/{{$poblacion->id}}/edit" title="EDITAR"><i class="far fa-edit"></i></a><br>
                    <a class="btn disabled borrar" href="/poblaciones/{{$poblacion->id}}/delete" title="BORRAR"><i class="far fa-trash-alt"></i></a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row d-flex justify-content-center">
        <div class="col-3 paginacion ">
            {{$poblaciones->links()}}
        </div>
    </div>
    </div>
    <script src="{{URL::asset('js/candado.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

@endsection
