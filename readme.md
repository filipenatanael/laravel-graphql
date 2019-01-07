# Laravel API Using GraphQL

#### Access the endpoint:
- http://localhost:8000/graphiql

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
    name,
    email,
    student {
      user_id
    }
    posts {
      user_id
      title
      description
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
```
