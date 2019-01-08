<?php

namespace App\GraphQL\Mutation\Post;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use App\Exceptions\MessageError;
use GraphQL;

use App\Models\Post;
use App\Models\User;

class createPostMutation extends Mutation
{
  protected $attributes = [
    'name' => 'createPost',
    'description' => 'A createPostMutation'
  ];

  public function type()
  {
    return GraphQL::type('Post');
  }

  public function args()
  {
    return [
      'user_id' => [
        'type' => Type::nonNull(Type::int()),
        'rules' => ['required']
      ],
      'title' => [
        'type' => Type::nonNull(Type::string()),
        'rules' => ['required']
      ],
      'description' => [
        'type' => Type::nonNull(Type::string()),
        'rules' => ['required']
      ]
    ];
  }

  public function resolve($root, $args, $context, ResolveInfo $info)
  {

      $user = User::find($args['user_id']);

      if(!$user) {
        throw with(new MessageError('The user_id was not found!'));
      }

      $post = new Post();
      $post->user_id = $user->id;
      $post->title = $args['title'];
      $post->description = $args['description'];
      $post->save();
      
      return $post;
  }
}
