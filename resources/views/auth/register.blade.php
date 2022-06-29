@extends('layouts.app')

@section('title','Register')

@section('content')

 <center><h1>Registro de la Base</h1></center>

    <div class="container">

      <div class="row">

        <form action="">

            @csrf

          <div class="row">
            <div class="input col s6">
              <input type="text" placeholder="Nombre_completo" name="nombre" id="nombre"  required>
              <label for="nombre">Nombre del Propietario</label>
           </div>
           <div class="input col s6">
             <input type="text" placeholder="Direccion" name="direccion" id="direccion"  required>
             <label for="direccion">Direccion</label>
            </div>
         </div>
            <div class="input col s6">
             <input type="text" placeholder="Telefono" name="telefono" id="telefono"  required>
             <label for="telefono">telefono</label>
            </div>

          <div class="row">
            <div class="input col s6">
              <input type="email" placeholder="Email" name="email" id="email"  required>
              <label for="email">Correo Electronico</label>
           </div>
           <div class="input col s6">
            <input type="password" placeholder="Password" name="password" id="password"  required>
            <label for="password">Contraseña</label>
         </div>
          </div>

          <div class="row">
            <div class="input col s6">
             <input type="password" placeholder="password_confirmation" name="password_confirmation" id="password_confirmation"  required>
             <label for="password_confirmation">Contraseña</label>
            </div>
          </div>

          <div class="row">

          </div>
        </form>
        
      </div>
    </div>
    
@endsection