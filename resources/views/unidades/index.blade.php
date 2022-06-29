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
 
    </div>
     </head>>
        <div class="container center">
            <h1>Listado de unidades</h1>
            <div class="divider"></div>
        <div class="row" id="tabla">
        <table>
            <thead>
                <th>Id</th>
                <th>Matricula</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Modelo del motor</th>
                <th>Combustible</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($unidad as $item)
                    <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->matricula }}</td>
                         <td>{{ $item->modelo }}</td>
                         <td>{{ $item->marca }}</td>
                         <td>{{ $item->modelo_del_motor }}</td>
                         <td>{{ $item->combustible }}</td>
                        <td>
                            <a href="{{ route ('unidades.edit', $item->id)}}" class="btn green darken-4"> <i class="large material-icons">edit</i></a>
                        </td>
                        <td>
                            <form action="{{ route('unidades.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn red darken-4"><i class="material-icons">delete</i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection