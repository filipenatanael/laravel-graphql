<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Post;
use App\Models\interfaces\Personable;
use App\Models\Traits\Personable as PersonableTrait;


class Comment extends Model implements Personable
{
    use PersonableTrait;

    public $timestamps = true;

    public function post() : BelongsTo
    {
      return $this->BelongsTo(Post::class, 'post_id');
    }
}
