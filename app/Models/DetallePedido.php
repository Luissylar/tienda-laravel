<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $fillable = ['pedido_id', 'producto_id', 'cantidad', 'precio_unitario'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }
}

