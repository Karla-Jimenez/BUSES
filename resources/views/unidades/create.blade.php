@extends('layouts.layout')
@section('content')
<head>
    <style type="text/css">
       form{
        width: 500px;
        height: 770px;
        margin: auto;
        border : black 2px solid;
        border-radius: 20px;
        background-color: white;
       }
    </style>
</head>
    <div class="container center">
        <h1>Regristro de unidades</h1>
        <form method="post" class="col s12" action="{{route('unidades.store')}}">
            <div class="row">
                @csrf 
                <div class="row">
                    <div class="col s12">
                      Matricula:
                      <div class="input-field inline">
                          <input name="matricula" id="matricula_inline" type="text" class="validate" >
                          <label for="matricula_inline">Matricula de la unidad</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                      Modelo:
                      <div class="input-field inline">
                           <input name="modelo" id="modelo_inline" type="text" class="validate">
                           <label for="modelo_inline">Modelo de la unidad</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                      Marca:
                      <div class="input-field inline">
                          <input name="marca" id="marca_inline" type="text" class="validate">
                          <label for="marca_inline">Marca de la unidad</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                      Modelo del motor:
                      <div class="input-field inline">
                          <input name="modelo_del_motor" id="modelo_del_motor_inline" type="text" class="validate">
                          <label for="modelo_del_motor_inline">Modelo del motor</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                      Combustible:
                      <div class="input-field inline">
                          <input name="combustible" id="combustible_inline" type="text" class="validate">
                          <label for="combustible_inline">Tipo de combustible</label>
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