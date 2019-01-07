<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    public function user(): BelongsTo
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
