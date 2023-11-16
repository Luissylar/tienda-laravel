<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 8, 2);
            $table->integer('stock')->default(0);
            $table->unsignedBigInteger('categoria_id')->nullable(); // ID de la categoría (si es aplicable)
            $table->timestamps();

            // Clave foránea para la categoría, si es aplicable
            // $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}

