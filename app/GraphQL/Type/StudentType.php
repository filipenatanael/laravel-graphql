<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class StudentType extends BaseType
{
    protected $attributes = [
        'name' => 'Student',
        'description' => 'A Student Type'
    ];

    public function fields()
    {
        return [
            'user_id' => [
              'type' => Type::nonNull(Type::int())
            ],
            'classroom_id' => [
              'type' => Type::getNullableType(Type::int())
            ]
        ];
    }
}
