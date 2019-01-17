<template>
  <div>
    <pre>
      {{ user }}
    </pre>
  </div>
</template>

<script>
import { QUERY_USER_SCHEMA } from '../graphql/User'
import { FetchAPI } from '../resources';

export default {
  data () {
    return {
      user: {},
      id: 2
    }
  },
  created() {
    this.getUser();
  },
  methods: {
    async getUser() {
      this.user = await FetchAPI(QUERY_USER_SCHEMA(this.id))
    }
  }
}
</script>

<style scoped>
</style>
