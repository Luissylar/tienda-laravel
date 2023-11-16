<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosTableSeeder extends Seeder
{
    public function run()
    {
        // Obtener la categoría con id 1 (televisores)
        $categoria = Categoria::find(1);

        // Verificar si la categoría existe
        if ($categoria) {
            // Crear 10 productos asociados a la categoría de televisores
            Producto::factory(10)->create([
                'categoria_id' => $categoria->id,
            ]);

            $this->command->info('Se insertaron 10 productos en la categoría de televisores.');
        } else {
            $this->command->error('La categoría con id 1 no fue encontrada.');
        }
    }
}
