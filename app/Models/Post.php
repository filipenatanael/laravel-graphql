<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\interfaces\Personable;
use App\Models\Traits\Personable as PersonableTrait;


class Post extends Model implements Personable
{
    use PersonableTrait;

    // protected $primaryKey = 'id';
    public $timestamps = false;

    public function comments(): HasMany
    {
      return $this->hasMany(Comment::class, '')
    }


    // public function user(): BelongsTo
    // {
    //   return $this->belongsTo(User::class, 'user_id');
    // }
}
