<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Valida los datos del formulario de inicio de sesión
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Si las credenciales son correctas, el usuario está autenticado
            return redirect('/admin'); // Redirige a la página principal
        } else {
            // Si las credenciales son incorrectas, vuelve a la página principal con un mensaje de error
            return redirect('/')->withInput()->withErrors(['mensaje' => 'Credenciales inválidas']);
        }
    }

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
