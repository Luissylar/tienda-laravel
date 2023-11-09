<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Valida los datos del formulario de inicio de sesión
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Si las credenciales son correctas, el usuario está autenticado
            return redirect('/'); // Redirige a la página principal
        } else {
            // Si las credenciales son incorrectas, vuelve a la página principal con un mensaje de error
            return redirect('/')->withInput()->withErrors(['mensaje' => 'Credenciales inválidas']);
        }
    }

}
