<?php

namespace App\GraphQL\Mutation\User;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use App\Exceptions\MessageError;
use GraphQL;

use App\Models\User;

class createUserMutation extends Mutation
{
  protected $attributes = [
    'name' => 'createUser',
    'description' => 'User mutation'
  ];

  public function type()
  {
    return GraphQL::type('User');
  }

  public function args()
  {
    return [
      'name' => [
        'type' => Type::nonNull(Type::string()),
        'rules' => ['required']
      ],
      'email' => [
        'type' => Type::nonNull(Type::string()),
        'rules' => ['email', 'unique:users'] // Unique on the table users
      ],
      'password' => [
        'type' => Type::nonNull(Type::string()),
        'rules' => ['min:4']
      ]
    ];
  }

  public function resolve($root, $args, $context, ResolveInfo $info)
  {
    try {
      $user = new User();
      $user->fill($args);
      $user->password = bcrypt($args['password']);
      $user->save();
      return $user;

    } catch (\Exception $e) {
      throw with(new MessageError($e->getMessage()));
    }
  }
}
