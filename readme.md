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
