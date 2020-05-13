<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{--Link de los toggles ON/OFF--}}
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7328c73af8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <style>
        .sidebar-container {
            position: fixed;
            width: 220px;
            height: 100%;
            left: 0;
            overflow-x: scroll;
            overflow-y: auto;
            background: #1a1a1a;
            color: #fff;

        }

        .content-container {
            padding-top: 20px;
        }

        .sidebar-logo {
            padding: 10px 15px 10px 30px;
            font-size: 20px;
            background-color: #9b59b6;
        }

        .sidebar-navigation {
            padding: 0;
            margin: 0;
            list-style-type: none;
            position: relative;
        }

        .sidebar-navigation li {
            background-color: transparent;
            position: relative;
            display: inline-block;
            width: 100%;
            line-height: 20px;
        }

        .sidebar-navigation li a {
            padding: 10px 15px 10px 30px;
            display: block;
            color: #fff;
        }

        .sidebar-navigation li .fa {
            margin-right: 10px;
        }

        .sidebar-navigation li a:active,
        .sidebar-navigation li a:hover,
        .sidebar-navigation li a:focus {
            text-decoration: none;
            outline: none;
        }

        .sidebar-navigation li::before {
            background-color: #9b59b6;
            position: absolute;
            content: '';
            height: 100%;
            left: 0;
            top: 0;
            -webkit-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 3px;
            z-index: -1;
        }

        .sidebar-navigation li:hover::before {
            width: 100%;
        }

        .sidebar-navigation .header {
            font-size: 12px;
            text-transform: uppercase;
            background-color: #151515;
            padding: 10px 15px 10px 30px;
        }

        .sidebar-navigation .header::before {
            background-color: transparent;
        }

        .content-container {
            padding-left: 220px;
        }
        .fa-eye {
            color:dodgerblue;
        }
        .fa-edit {
            color:green;
        }
        .fa-trash-alt{
            color:darkred;
        }
        table tr {
            text-align: center;
        }
        ul > .header{
            color:#9b59b6 ;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <a class="navbar-brand" href="/index">IMD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <a href="{{ url('/logout') }}"> logout </a>
        </form>
    </div>
</nav>

<div class="sidebar-container">
    <div class="sidebar-logo">
        Backoffice IMD
    </div>
    <ul class="sidebar-navigation">
        <li class="header"><i class="fas fa-table"></i> VER TABLAS</li>
        <li>
            <a href="/asignaciones">
                <i class="fas fa-book"></i> Asignaciones
            </a>
        </li>
        <li>
            <a href="/categorias">
                <i class="fas fa-ellipsis-h"></i> Categorías
            </a>
        </li>
        <li>
            <a href="/festivos">
                <i class="fas fa-umbrella-beach"></i> Festivos
            </a>
        </li>
        <li>
            <a href="/horarios">
                <i class="far fa-clock"></i> Horarios
            </a>
        </li>
        <li>
            <a href="/imagenes">
                <i class="far fa-image"></i> Imagenes
            </a>
        </li>
        <li>
            <a href="/llamame">
                <i class="fas fa-phone"></i> Llamame
            </a>
        </li>
        <li>
            <a href="/productos">
                <i class="fas fa-seedling"></i> Productos
            </a>
        </li>
        <li>
            <a href="/pedidos">
                <i class="fas fa-truck"></i> Pedidos
            </a>
        </li>
        <li>
            <a href="/provincias">
                <i class="far fa-map"></i> Provincias
            </a>
        </li>
        <li>
            <a href="/poblaciones">
                <i class="fas fa-map-pin"></i> Poblaciones
            </a>
        </li>
        <li>
            <a href="/tanatorios">
                <i class="fas fa-place-of-worship"></i> Tanatorios
            </a>
        </li>

        <li class="header"><i class="fas fa-plus-circle"></i> AÑADIR FILA</li>
        <li>
            <a href="/asignaciones/create">
                <i class="fas fa-plus"></i> Asignaciones
            </a>
        </li>
        <li>
            <a href="/categorias/create">
                <i class="fas fa-plus"></i> Categorías
            </a>
        </li>
        <li>
            <a href="/festivos/create">
                <i class="fas fa-plus"></i> Frestivos
            </a>
        </li>
        <li>
            <a href="/horarios/create">
                <i class="fas fa-plus"></i> Horarios
            </a>
        </li>
        <li>
            <a href="/imagenes/create">
                <i class="fas fa-plus"></i> Imagenes
            </a>
        </li>
        <li>
            <a href="/llamame/create">
                <i class="fas fa-plus"></i> Llamame
            </a>
        </li>
        <li>
            <a href="/productos/create">
                <i class="fas fa-plus"></i> Productos
            </a>
        </li>
        <li>
            <a href="/pedidos/create">
                <i class="fas fa-plus"></i> Pedidos
            </a>
        </li>
        <li>
            <a href="/provincias/create">
                <i class="fas fa-plus"></i> Provincias
            </a>
        </li>
        <li>
            <a href="/poblaciones/create">
                <i class="fas fa-plus"></i> Poblaciones
            </a>
        </li>

        <li>
            <a href="/tanatorios/create">
                <i class="fas fa-plus"></i> Tanatorio
            </a>
        </li>
        <li>
            <a href="#">
                &nbsp;
            </a>
        </li>
    </ul>
</div>


<div class=" content-container mt-5 ml-2 mr-2">

    @yield('content')

</div>


</body>
</html>
