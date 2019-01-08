<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class CommentType extends BaseType
{
    protected $attributes = [
        'name' => 'Comment',
        'description' => 'A Comment Type'
    ];

    public function fields()
    {
        return [
          'id' => [
            'type' => Type::nonNull(Type::int())
          ],
          'content' => [
            'type' => Type::nonNull(Type::string())
          ],
          'created_at' => [
            'type' => Type::nonNull(Type::string())
          ]
        ];
    }
}
