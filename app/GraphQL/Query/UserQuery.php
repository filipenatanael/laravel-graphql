<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

use App\Models\User;

class UserQuery extends Query
{
  protected $attributes = [
    'name' => 'User',
    'description' => 'Find an user.'
  ];

  // Type of return
  public function type()
  {
    return GraphQL::type('User');
    // return Type::listOf(GraphQL::type('User'));
    // return Type::listOf(Type::string());
  }
  
  public function args()
  {
    return [
      'id' => [
        'type' => Type::nonNull(Type::int())
      ]
    ];
  }

  // Like a controller
  public function resolve($root, $args, $context, ResolveInfo $info)
  {
    return User::find($args['id']);
    // return User::all();
  }
}
