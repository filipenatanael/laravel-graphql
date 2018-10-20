<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;

class Teacher extends Model
{
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    public function user(): BelongsTo
    {
      return $this->belogsTo(User:class, 'user_id')
    }
}
