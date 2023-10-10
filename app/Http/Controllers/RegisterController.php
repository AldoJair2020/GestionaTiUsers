<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller {
    
    public function create() {
        return view('auth.register');
    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'confirmed',
                'string',
                'min:8', // Mínimo 8 caracteres
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]+$/', // Al menos una letra mayúscula y al menos un número
            ],
        ], [
            'email.unique' => 'El correo electrónico ya ha sido registrado previamente',
            'password.regex' => 'La contraseña debe contener al menos una letra mayúscula y al menos un número',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres de longitud',
        ]);
        
        $user = User::create(request(['name', 'lastname', 'email', 'password']));
        
        $user->assignRole('candidato');
        
        auth()->login($user);
        return redirect()->to('/');
    }
    
}
