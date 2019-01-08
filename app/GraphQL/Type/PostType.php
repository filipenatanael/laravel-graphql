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
      'id' => [
        'type' => Type::nonNull(Type::int())
      ],
      'user_id' => [
        'type' => Type::nonNull(Type::int())
      ],
      'title' => [
        'type' => Type::nonNull(Type::string())
      ],
      'description' => [
        'type' => Type::getNullableType(Type::string())
      ],
      'created_at' => [
        'type' => Type::nonNull(Type::string())
      ],
      'updated_at' => [
        'type' => Type::nonNull(Type::string())
      ],
    ];
  }
}
