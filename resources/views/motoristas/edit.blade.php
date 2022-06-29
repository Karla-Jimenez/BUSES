@extends('layouts.layout')
@section('content')
<head>
<style type="text/css">
   form{
    width: 500px;
    height: 990px;
    margin: auto;
    border : black  2px solid;
    border-radius: 20px;
    background-color: white;
   }
</style>                    
</head>
   <div class="container center">
    <h1>Editar motoristas</h1>
    <div class="divider"></div>
    <form method="POST" class="col s12" action="{{ route('motoristas.update',$motorista->id) }}">
      <div class="row">
        @csrf
        @method('PATCH')
        <div class="container center">
        <div class="row">
          <div class="col s12">
            Nombres:
            <div class="input-field inline">
              <input id="nombres_inline" type="text" class="validate" value="{{$motorista->nombres}}">
              <label for="nombres_inline">Nombres del motorista</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            Apellidos:
            <div class="input-field inline">
              <input id="apellidos_inline" type="text" class="validate" value="{{$motorista->apellidos}}">
              <label for="apellidos_inline">Apellidos del motorista</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            Correo electronico:
            <div class="input-field inline">
              <input id="email_inline" type="email" class="validate" value="{{$motorista->email}}">
              <label for="email_inline">Correo del motorista</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            Telefono:
            <div class="input-field inline">
              <input id="telefono_inline" type="text" class="validate" value="{{$motorista->telefono}}">
              <label for="telefono_inline">Telefono del motorista</label>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col s12">
            D.U.I:
            <div class="input-field inline">
              <input id="dui_inline" type="text" class="validate" value="{{$motorista->dui}}">
              <label for="dui_inline">Dui del motorista</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            NIT:
            <div class="input-field inline">
              <input id="nit_inline" type="text" class="validate" value="{{$motorista->nit}}">
              <label for="nit_inline">Dui del motorista</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            Direccion:
            <div class="input-field inline">
              <input id="direccion_inline" type="text" class="validate" value="{{$motorista->direccion}}">
              <label for="direccion_inline">Direccion del motorista</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            Licencia:
            <div class="input-field inline">
              <input id="licencia_inline" type="text" class="validate" value="{{$motorista->licencia}}">
              <label for="licencia_inline">licencia del motorista</label>
            </div>
          </div>
        </div>
          <div class="row">
              <input type="submit" value="Confirmar" class="btn red darken-1">
        </div>
        <div class="row">
            <a href="{{ route('motoristas.index')}}" class="btn red darken-1">Cancelar</a>
        </div>
        </form>
      </div>
      </div>
@endsection
