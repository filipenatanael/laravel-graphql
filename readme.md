<h1 align="center">Laravel API Using GraphQL</h1>

<p align="center">
<a href="https://travis-ci.org/filipenatanael/laravel-graphql"><img src="https://travis-ci.org/filipenatanael/laravel-graphql.svg?branch=master" alt="Travis Build Status"></a>
<a href="https://github.com/filipenatanael/laravel-graphql"><img src="https://img.shields.io/npm/l/vue.svg" alt="License"></a>
<a href="https://discordapp.com/invite/mPZNm7A"><img src="https://img.shields.io/badge/chat-on%20discord-7289da.svg" alt="Laravel Community "></a>
</p>

![alt text](https://raw.githubusercontent.com/filipenatanael/images-in-readme/master/laravel-graphql/logo.png)

<p align="center">
<b>GraphQL</b> is a query language for your API, and a server-side runtime for executing queries by using a type system you define for your data. GraphQL isn't tied to any specific database or storage engine and is instead backed by your existing code and data.

<b>Laravel</b> is a web application framework PHP with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling.
</p>

## Running

##### *ServerSide (Laravel & GraphQL)*
```shell
cd laravel-graphql
php artisan serve
# http://localhost:8000/graphiql
```
##### *ClientSide (Vue.js & Apollo)*
```shell
cd laravel-graphql/client-application
npm run serve
# http://localhost:8081
```

## UserQuery:

```gql
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

## Mutations:

```gql
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
