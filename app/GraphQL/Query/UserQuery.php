<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

use App\Models\User;
use App\Models\Student;
use App\Models\Post;

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

    //$fields = $info->getFieldSelection();
    // $bits = User::find($args['id']);
    // foreach ($fields as $field => $keys) {
    //   if ($field === 'post') {
    //     $bits->with('post');
    //   }
    // }
    // return $bits->latest()->get();

  }
}
