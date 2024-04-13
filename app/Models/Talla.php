<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    use HasFactory;

    protected $table = 'tallas'; // nombre correcto de la tabla

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_talla');
    }
}
