@extends('layouts.layout')
@section('content')
<head>
    <div class="container">
     <style type="text/css">
         #tabla {
          width: 900px;
          height: 900px;
          margin: auto;
          border :#D9D9D9  2px solid;
          border-radius: 20px;
          background-color: #D9D9D9;
         }
      </style>
     </head>>
        <div class="container center">
            <h1>Lista de motoristas</h1>
            <div class="divider"></div>
        <div class="row" id="tabla">
        <table>
            <thead>
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>EMAIL</th>
                <th>TELEFONO</th>
                <th>DUI</th>
                <th>NIT</th>
                <th>DIRECCION</th>
                <th>LICENCIA</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($motorista as $item)
                    <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->nombres }}</td>
                         <td>{{ $item->apellidos }}</td>
                         <td>{{ $item->email}}</td>
                         <td>{{ $item->telefono }}</td>
                         <td>{{ $item->dui }}</td>
                         <td>{{ $item->nit }}</td>
                         <td>{{ $item->direccion }}</td>
                         <td>{{ $item->licencia }}</td>
                        <td>
                            <a href="{{ route ('motoristas.edit', $item->id)}}" class="btn green darken-4"> <i class="large material-icons">edit</i></a>
                        </td>
                        <td>
                            <form action="{{ route('motoristas.destroy', $item->id)}} "method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn red darken-4"><i class="material-icons">delete</i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection