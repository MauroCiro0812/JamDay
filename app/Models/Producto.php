<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $fillable = ['nombre', 'precio', 'foto'];

    public function marca()
{
        return $this->belongsTo(Marca::class, 'id_marca');
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
        return $this->belongsTo(Sub_categoria::class, 'id_sub_categoria');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'id_color');
    }

    public function detalles()
    {
        return $this->hasMany(Detalle::class, 'producto_id');
    }

//Scope

    public function scopeCategoria($query, $id_categoria)
    {
        if (!empty($id_categoria)) {
            return $query->where('id_categoria', '=', $id_categoria);
        }
        return $query;
    }

    public function scopeMarca($query, $id_marca)
    {
        if (!empty($id_marca)) {
            return $query->where('id_marca', '=', $id_marca);
        }
        return $query;
    }

    public function scopeColor($query, $id_color)
    {
        if (!empty($id_color)) {
            return $query->where('id_color', '=', $id_color);
        }
        return $query;
    }

    public function scopeTalla($query, $id_talla)
    {
        if (!empty($id_talla)) {
            return $query->where('id_talla', '=', $id_talla);
        }
        return $query;
    }

    public function scopeSub_Categoria($query, $id_sub_categoria)
    {
        if (!empty($id_sub_categoria)) {
            return $query->where('id_sub_categoria', '=', $id_sub_categoria);
        }
        return $query;
    }

};
