@extends('layouts.app')

@section('title','login')

@section('content')
  
  <div class="container">
    
       <div class="row">
           <center><h1>Ingrese su Usuario</h1></center>

           @if ($errors->any())
               <p>Verifique si los datos son los correctos</p>
           @endif

           <form class="mt-4" method="POST" action="">

            @csrf

            <div class="block">

               <div class="row">

                   <div class="input-field col s6">
                       <input type="email"  placeholder="Email" id="email" name="email" required>
                     <label for="email">Correo electronico</label>
                   </div>

                   <div class="input-field col s6">
                    <input type="password"  placeholder="Password" id="password" name="password" required>
                  <label for="password">Contraseña</label>
                </div>

              </div>

              <div class="row">
                 <input type="submit" value="Ingresar" class="btn red darken-2">
                 <input type="reset" value="Cancelar" class="btn yellow darken-2">
               </div>
            </div>
          </form>
       </div>


  </div>

@endsection