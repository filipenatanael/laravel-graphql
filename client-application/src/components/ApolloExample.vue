<template>
  <div class="apollo-example">
    <!-- Apollo watched Graphql query -->


    {{user}}
  </div>
</template>

<script>

import { QUERY_USER_SCHEMA } from '../graphql/User'


// const QUERY_USER_SCHEMA = (args) => {
//   return `{
//     user(id: ${args}) {
//       name
//       email
//       posts {
//         title
//         description
//       }
//     }
//   }`;
// }

export default {
  data () {
    return {
      user: 'ALOAING',
    }
  },
  created() {

    this.fetchGraphQLAPI()
  },
  methods: {

    //   logout () {
    //   firebase.auth().signOut().then(function () {
    //     this.$router.push('login')
    //   }.bind(this)) // bind added.
    // }

    fetchGraphQLAPI() {
      fetch('http://localhost:8000/graphql', {
        method: 'POST',
        mode: 'cors',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          "query": QUERY_USER_SCHEMA(2),
          "variables": null,
          "operationName": null
        })
      }).then(function (res){
        res.json().then((json) => {
          this.user = json.data.user
        })
      }.bind(this)).catch(console.error)
    }
  }
}
</script>

<style scoped>

</style>
