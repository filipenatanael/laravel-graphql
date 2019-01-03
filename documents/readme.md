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
