<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store() {

        $this->validate(request(),[
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'nombre_base' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
      
        $user = User::create(request(['nombre','direccion','telefono','nombre_base','email','password']));

        auth()->login($user);
        return redirect()->to('/');

    }
}
