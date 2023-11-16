<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class TiendaController extends Controller
{
    public function productos($categoria_id)
    {
        $productos = Producto::where('categoria_id', $categoria_id)->get();
        $categoria = Categoria::find($categoria_id); // Obtener información de la categoría

        return view('productos', ['productos' => $productos, 'categoria' => $categoria]);
    }
}

