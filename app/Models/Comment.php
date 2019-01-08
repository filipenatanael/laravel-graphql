<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\interfaces\Personable;
use App\Models\Traits\Personable as PersonableTrait;


class Comment extends Model implements Personable
{
    use PersonableTrait;

    public $timestamps = true;

    public function post() : BelongsTo
    {
      return $this->BelongsTo(Post::class, 'post_id')
    }
}
