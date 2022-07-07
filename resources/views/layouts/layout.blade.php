<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>BUSES</title>
    <style type="text/css">
      #slide-out{
        list-style-type:none;
        margin:0;
        padding:0;
        width: 250px;
        background-color:#F91324;
        border-style: #F91324; ;
        height: 200%;
        position: fixed;
      }
      #slide-out{
        text-decoration: none;
        color:white;
        padding: 0px 0px;
        display: block;
        text-align: center;
      }
      #slide-out {
        background-color: white;
        color: black;
      }
      #slide-out{
        background-color: #F91324;
        color: white;
      }
    </style>

</head>
<body>
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><a href="{{route('register.index')}}"><i class="material-icons">home</i>Inicio</a></li>
    <li><a href="{{route('unidades.create')}}"><i class="material-icons">directions_bus</i>Registrar Unidad</a></li>
    <li><a href="{{route('motoristas.create')}}"><i class="material-icons">person</i>Registrar Motorista</a></li>
    <li><a href="{{route('rotaciones.create')}}"><i class="material-icons">cached</i>Rotacion</a></li>
    <li><a href="{{route('motoristas.index')}}"><i class="material-icons">list</i>Lista de Empleados</a></li>
    <li><a href="{{route('unidades.index')}}"><i class="material-icons">list</i>Lista de Unidades</a></li>
    <li><a href="{{route('rotaciones.index')}}"><i class="material-icons">list</i>Lista de Rotación</a></li>
  </ul>
     <div class="container">
        @yield('content')
        
    </div>



      <!-- Compiled and minified JavaScript -->
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  