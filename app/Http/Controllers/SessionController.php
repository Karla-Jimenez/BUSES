<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create() {
        return view('motoristas.create');
    }

    public function store() {
       if(auth()->attempt(request(['email','password'])) == false){
        return back()->withErrors([
             'message'=> 'El correo o la contraseña son incorrectos, ingreselos de nuevo'
        ]);
       }
       
       return redirect()->to('/');
    }
}
