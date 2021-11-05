<template>
  <div>
    <Tutorial/>
    <a class="block text-center my-10" href="#" @click.prevent="logout">Logout</a>
    <NuxtLink class="block text-center my-10" to="/login">Login</NuxtLink>

  </div>
</template>

<script>
export default {
  mounted() {
    this.sounds()
  },
  methods: {
    logout() {
      this.$auth.logout()
    },
    sounds() {
      this.$axios.$get('/api/sounds').then((response) => {
        console.log(response)
      })
    }
  },
}
</script>
