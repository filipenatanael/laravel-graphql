<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class PostType extends BaseType
{
  protected $attributes = [
    'name' => 'Post',
    'description' => 'Post Type.'
  ];

  public function fields()
  {
    return [
      'user_id' => [
        'type' => Type::nonNull(Type::int())
      ],
      'title' => [
        'type' => Type::nonNull(Type::string())
      ],
      'description' => [
        'type' => Type::nonNull(Type::string())
      ]
    ];
  }
}
