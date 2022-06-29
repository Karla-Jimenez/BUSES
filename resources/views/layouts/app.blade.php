<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>@yield('title') Autobuses.io</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper  red darken-2" >
          <center><a href="#" class="brand-logo">Autobuses.io</a></center>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('register.index')}}">Registro</a></li>
            <li><a href="{{ route('login.index')}}">Iniciar Seccion</a></li>
          </ul>
        </div>
      </nav>
  @yield('content')

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>