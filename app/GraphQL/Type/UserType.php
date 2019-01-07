<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class UserType extends BaseType
{
  protected $attributes = [
    'name' => 'User',
    'description' => 'User type.'
  ];

  public function fields()
  {
    return [
      'id' => [
        'type' => Type::nonNull(Type::int())
      ],
      'name' => [
        'type' => Type::nonNull(Type::string())
      ],
      'email' => [
        'type' => Type::nonNull(Type::string())
      ],
      'created_at' => [
        'type' => Type::nonNull(Type::string())
      ],
      'updated_at' => [
        'type' => Type::nonNull(Type::string())
      ],
      'student' => [
        'type' => GraphQL::type('Student'),
        'description' => 'The student profile.'
      ],
      'posts' => [
        'type' => Type::listOf(GraphQL::type('Post')),
        'description' => 'The user posts.'
      ]
    ];
  }
}
