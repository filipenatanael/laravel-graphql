# Laravel API Using GraphQL

## Steps:

### Create Type:

- php artisan make:graphql:type UserType

### Add to Types:

*config/graphql.php*
```php
  'types' => [
      \App\GraphQL\Type\UserType::class,
  ]
```

### Create Query
- php artisan make:graphql:query UserQuery

### Add to Types:

*config/graphql.php*
```php
  'schemas' => [
      'default' => [
          'query' => [
              'user' => \App\GraphQL\Query\UserQuery::class,
      ]
    ]
  ]
```


## Tinker One to One
- php artisan tinker
- $user = factory(App\User::class)->create();

- $teacher = new App\Teacher
- $user->teacher()->save($teacher)
