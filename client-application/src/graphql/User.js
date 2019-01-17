export const QUERY_USER_SCHEMA = (args) => {
  return `{
    user(id: ${args}) {
      name
      email
      posts {
        title
        description
      }
    }
  }`;
};
