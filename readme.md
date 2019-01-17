<h1 align="center">Laravel API Using GraphQL</h1>

<p align="center">
  <a href="https://travis-ci.org/filipenatanael/laravel-graphql"><img src="https://travis-ci.org/filipenatanael/laravel-graphql.svg?branch=master" alt="Travis Build Status"></a>
</p>


## Running:

```shell
cd laravel-graphql
php artisan serve
# http://localhost:8000/graphiql

cd laravel-graphql/client-application
npm run serve
# http://localhost:8081
```

#### User Query:

```Javascript
query {
  user(id: 1) {
    id,
    name,
    email
  }
}


{
  user(id: 2) {
    name
    email
    posts {
      title
      description
      comments {
        content
        created_at
      }
    }
  }
}

```

#### Mutation:

```Javascript
mutation {
  createUser(
    name: "Filipe Natanael",
    email: "filipenatanael@example.com",
    password: "MyPassWord#123"
  ) {
    id
    email
  }
}

mutation {
  createPost(
    user_id: 2,
    title: "JavaScript TDD",
    description: "JavaScript TDD Course....."
  ) {
    id
  }
}

```
