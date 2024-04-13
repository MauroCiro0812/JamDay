<?php

namespace App\Models;

use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rating
 *
 * @property $id
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 * @property $rating
 * @property $comment
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rating extends Model
{

    static $rules = [
        'user_id' => 'required',
        'producto_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'producto_id', 'rating', 'comment'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto', 'id');
    }

}
