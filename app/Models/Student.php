<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Interfaces\Personable;
use App\Models\Traits\Personable as PersonableTrait;

use App\Models\Classroom;

class Student extends Model implements Personable
{
    use PersonableTrait;

    protected $primaryKey = 'user_id';
    public $timestamps = false;

    // public function user(): BelongsTo
    // {
    //   return $this->belogsTo(User:class, 'user_id')
    // }

    public function classroom() : BelongsTo
    {
      return $this->belogsTo(Classroom::class, 'classroom_id');
    }
}
