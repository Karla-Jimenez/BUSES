@extends('layouts.layout')
@section('content')
<head>
    <style type="text/css">
        form{
            width: 500px;
            height: 770px;
            margin: auto;
            border : black  2px solid;
            border-radius: 20px;
            background-color: white;
        }
     </style>
</head>
        <div class="container center">
            <h1>Editar rotaciones</h1>
            <form method="post" class="col s12" action="{{route('rotaciones.update', $rotacion->id) }}">
                <div class="row">
                    @csrf 
                    @method('PATCH')
                    <div class="row">
                        <div class="col s12">
                          Asignacion de ruta:
                          <div class="input-field inline">
                              <input name="asignacion_de_ruta" id="asignacion_de_ruta_inline" type="text" class="validate" required value="{{$rotacion->asignacion_de_ruta}}">
                              <label for="asignacion_de_ruta_inline">Asignación de ruta</label>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                          Motorista:
                          <div class="input-field inline">
                               <input name="motorista" id="motorista_inline" type="text" class="validate" required value="{{$rotacion->motorista}}">
                               <label for="modelo_inline">Motorista</label>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                          Fecha:
                          <div class="input-field inline">
                              <input name="fecha" id="fecha_inline" type="text" class="validate" required value="{{$rotacion->fecha}}">
                              <label for="fecha_inline">Fecha</label>
                          </div>
                        </div>
                    </div>
            <div class="row">
                <div class="input-field col s12">
                    <a href="{{ route('rotaciones.index')}}" class="btn yellow darken-4">Cancelar</a>
                    <input type="submit" value="Actualizar" class="btn green darken-4">
                </div>
            </div>
        </form>
    </div>
@endsection