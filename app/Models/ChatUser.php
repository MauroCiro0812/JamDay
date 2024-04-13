<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChatUser
 *
 * @property $id
 * @property $user_id
 * @property $chat_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ChatUser extends Model
{
    protected $table = 'chat_user';
    static $rules = [
        'user_id' => 'required',
        'chat_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'chat_id'];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

}
