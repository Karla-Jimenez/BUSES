@extends('layouts.layout')
@section('content')
<head>
<style type="text/css">
   form{
    width: 500px;
    height: 908px;
    margin: auto;
    border : black  2px solid;
    border-radius: 20px;
    background-color: white;
   }
</style>
</head>
   <div class="container center">
    <h1>Rotacion</h1>
    <form method="POST" class="col s12" action="{{ route('rotaciones.store')}}">
      <div class="row">
          @csrf
        <div class="container center">
        <div class="row">
          <div class="col s12">
            Asignacion de ruta:
            <div class="input-field inline">
              <input name="asignacion_de_ruta" id="nombres_inline" type="text" class="validate">
              <label for="nombres_inline">Ruta asignada</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            Motorista asignado:
            <div class="input-field inline">
              <input name="motorista" id="apellidos_inline" type="text" class="validate">
              <label for="apellidos_inline">Nombre del motorista</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            Fecha:
            <div class="input-field inline">
              <input name="fecha" id="fecha_inline" type="text" class="validate">
              <label for="telefono_inline">Fecha</label>
            </div>
          </div>
        </div>
          <div class="row">
            <input type="submit" value="Confirmar" class="btn green darken-1">
        </div>
        <div class="row">
            <input type="reset" value="Cancelar" class="btn red darken-1">
        </div>
        </form>
      </div>
      </div>
@endsection