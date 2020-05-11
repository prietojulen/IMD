<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

<div class="mt-5">


    @yield('content')

</div>
