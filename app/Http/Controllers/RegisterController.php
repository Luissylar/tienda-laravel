<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registro(Request $request)
    {
        // Valida los datos del formulario de registro
        $request->validate([
            'correo' => 'required|email|unique:users,email',
            'contrasena' => 'required|min:6',
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
        ]);


        // Crea un nuevo usuario
        $user = new User();
        $user->email = $request->input('correo');
        $user->password = Hash::make($request->input('contrasena'));
        $user->nombres = $request->input('nombres');
        $user->apellidos = $request->input('apellidos');
        $user->save();


        return redirect('/');
    }

}
