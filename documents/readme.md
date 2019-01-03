# Laravel API Using GraphQL - Steps:

## Create Type:
```shell
php artisan make:graphql:type UserType
```

## Add to Types:

*config/graphql.php*
```php
  'types' => [
    \App\GraphQL\Type\UserType::class,
  ]
```

### Create Query
```shell
php artisan make:graphql:query UserQuery
```

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
<hr>

## Tinker One to One

- php artisan tinker
```php
$teacher = new App\Models\Teacher
$user->teacher()->save($teacher);
```

## Steps:

- Create user:
```php
$user = new App\Models\User;
$user = factory(App\Models\User::class)->create();
```

- Define user as student:
```php
$user->student()->create([]);
```

- Create student instance:
```php
$student = new App\Models\Student;
```

- Create student instance:
```php
$classroom = new App\Models\Classroom;
```

- Add student to classroom
```php
$student->classroom()->associate($classroom);
```
