<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Comment;
use App\Models\interfaces\Personable;
use App\Models\Traits\Personable as PersonableTrait;


class Post extends Model implements Personable
{
    use PersonableTrait;

    public $timestamps = false;

    public function comments(): HasMany
    {
      return $this->hasMany(Comment::class, 'post_id');
    }

    // public function user(): BelongsTo
    // {
    //   return $this->belongsTo(User::class, 'user_id');
    // }
}
