@extends('layouts.layout')
@section('content')
<head>
    <style type="text/css">
       form{
        width: 500px;
        height: 1100px;
        margin: auto;
        border : black 2px solid;
        border-radius: 20px;
        background-color: white;
       }
          form {
           font-family: "Lato", sans-serif;
            }
    </style>
</head>
    <div class="container center">
        <h1>Regristro Motoristas</h1>
        <form method="post" class="col s12" action="{{route('motoristas.store')}}">
            <div class="row">
                @csrf 
                <div class="row">
                    <div class="col s12">
                      Nombres:
                      <div class="input-field inline">
                          <input name="nombres" id="nombres_inline" type="text" class="validate" >
                          <label for="nombres_inline">Nombres motorista</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                      Apellidos:
                      <div class="input-field inline">
                           <input name="apellidos" id="apellidos_inline" type="text" class="validate">
                           <label for="apellidos_inline">Apellidos motorista</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                      Email:
                      <div class="input-field inline">
                          <input name="email" id="email_inline" type="text" class="validate">
                          <label for="email_inline">Correo electronico</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                      Telefono:
                      <div class="input-field inline">
                          <input name="telefono" id="telefono_inline" type="text" class="validate">
                          <label for="telefono_inline">Telefono</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                      DUI:
                      <div class="input-field inline">
                          <input name="dui" id="dui_inline" type="text" class="validate">
                          <label for="dui_inline">Número de Dui</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col s12">
                   Nit:
                    <div class="input-field inline">
                        <input name="nit" id="nit_inline" type="text" class="validate">
                        <label for="nit_inline">Número de Nit</label>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col s12">
                  Direccion:
                  <div class="input-field inline">
                      <input name="direccion" id="direccion_inline" type="text" class="validate">
                      <label for="direccion_inline">Direccion</label>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col s12">
                Licencia:
                <div class="input-field inline">
                    <input name="licencia" id="licencia_inline" type="text" class="validate">
                    <label for="licencia_inline">Licencia</label>
                </div>
              </div>
          </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="Confirmar" class="btn green darken-1">
                    </div>
                    <div class="input-field col s12">
                        <input type="reset" value="Cancelar" class="btn red darken-1">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection