@extends('layouts.layout')
@section('content')
<head>
    <div class="container">
     <style type="text/css">
         #tabla {
<<<<<<< HEAD
          width: 700px;
          height: 900px;
          margin: auto;
          border :#D9D9D9  3px solid;
=======
          width: 900px;
          height: 900px;
          margin: auto;
          border :#D9D9D9  2px solid;
>>>>>>> 6abbafbc1c41bb2ca544873673d94bf398384d08
          border-radius: 20px;
          background-color: #D9D9D9;
         }
      </style>
 
    </div>
     </head>>
        <div class="container center">
<<<<<<< HEAD
            <h1>Listado de Rotación</h1>
        <div class="row" id="tabla">
        <table>
            <thead>
                <th>ID</th>
                <th>ASIGNACIÓN DE RUTA</th>
                <th>MOTORISTA</th>
                <th>FECHA</th>
                <th>ACCIONES</th>
=======
            <h1>Listado de rotaciones</h1>
        <div class="row" id="tabla">
        <table>
            <thead>
                <th>Id</th>
                <th>Asignación de ruta</th>
                <th>Motorista</th>
                <th>Fecha</th>
                <th>Acciones</th>
>>>>>>> 6abbafbc1c41bb2ca544873673d94bf398384d08
            </thead>
            <tbody>
                @foreach ($rotacion as $item)
                    <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->asignacion_de_ruta}}</td>
                         <td>{{ $item->motorista}}</td>
                         <td>{{ $item->fecha}}</td>
                        <td>
                            <a href="{{ route ('rotaciones.edit', $item->id)}}" class="btn green darken-4"> <i class="large material-icons">edit</i></a>
                        </td>
                        <td>
                            <form action="{{ route('rotaciones.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn red darken-4"><i class="material-icons">delete</i></button>
                            </form>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 6abbafbc1c41bb2ca544873673d94bf398384d08
