<?php

namespace Database\Factories;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosTableSeeder extends Seeder
{
    public function run()
    {
        // Obtener la categoría con id 1 (televisores)
        $categoria = \App\Models\Categoria::find(1);

        // Verificar si la categoría existe
        if ($categoria) {
            // Crear 10 productos asociados a la categoría de televisores
            Producto::factory()->count(10)->create([
                'categoria_id' => $categoria->id,
            ]);

            $this->command->info('Se insertaron 10 productos en la categoría de televisores.');
        } else {
            $this->command->error('La categoría con id 1 no fue encontrada.');
        }
    }
}


