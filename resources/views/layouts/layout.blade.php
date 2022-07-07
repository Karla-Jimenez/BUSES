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
     body {
  font-family: "Lato", sans-serif;
}

#slide-out {
  height: 100%;
  width: 260px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #F91324;
  overflow-x: hidden;
  padding-top: 19px;
}

#slide-out a {
  padding:13px 13px 13px 10px;
  text-decoration: none;
  font-size: 22px;
  color: white;
  display: inline-block;
}

#slide-out a:hover {
  color: black;
}




</style>

</head>
<body>
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><a href="#"><i class="material-icons">home</i>Inicio</a></li>
    <li><a href="{{route('unidades.create')}}"><i class="material-icons">directions_bus</i>Registrar Unidad</a></li>
    <li><a href="{{route('motoristas.create')}}"><i class="material-icons">person</i>Registrar Motorista</a></li>
    <li><a href="{{route('rotaciones.create')}}"><i class="material-icons">cached</i>Rotacion</a></li>
    <li><a href="{{route('motoristas.index')}}"><i class="material-icons">list</i>Lista de Empleados</a></li>
    <li><a href="{{route('unidades.index')}}"><i class="material-icons">list</i>Lista de Unidades</a></li>
  </ul>
     <div class="container">
        @yield('content')
        
    </div>



      <!-- Compiled and minified JavaScript -->
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>