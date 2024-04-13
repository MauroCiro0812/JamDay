<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'carrito';

    protected $fillable = [
        'id_producto',
        'nombre',
        'id_categoria',
        'precio',
        'id_marca',
        'descripcion',
        'id_sub_categoria',
        'id_color',
        'cantidad',
    ];
}
