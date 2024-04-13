<?php

namespace App\Models;

use App\Models\Categoria;
use App\Models\Color;
use App\Models\Producto;
use App\Models\Sub_categoria;
use App\Models\Talla;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'inventario'; // Nombre correcto de la tabla

    public function producto()
    {
        return $this->belongsTo(producto::class, 'id_producto');
    }

    public function talla()
    {
        return $this->belongsTo(Talla::class, 'id_talla');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function sub_categoria()
    {
        return $this->belongsTo(sub_categoria::class, 'id_sub_categoria');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'id_color');
    }
}
