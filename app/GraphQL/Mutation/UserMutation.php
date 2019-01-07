<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use App\Exceptions\MessageError;
use GraphQL;

use App\Models\User;

class UserMutation extends Mutation
{
  protected $attributes = [
    'name' => 'user',
    'description' => 'User mutation'
  ];

  public function type()
  {
    return GraphQL::type('User');
    // return Type::listOf(Type::string());
  }

  public function args()
  {
    return [
      'id' => [
        'type' => Type::getNullableType(Type::int())
      ],
      'name' => [
        'type' => Type::nonNull(Type::string())
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

    $user = User::find($args['id']);

    if ($user) {
      throw with(new MessageError('Sorry, this id is being used.'));
      // $user->fill($args);
      // $user->password = bcrypt($args['password']);
      // $user->save();
      // return $user;
    } else {
      $user = new User();
      $user->fill($args);
      $user->password = bcrypt($args['password']);
      $user->save();
      return $user;
    }


  }
}
