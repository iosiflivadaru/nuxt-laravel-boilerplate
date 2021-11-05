<template>
  <a href="#" @click.prevent="login">Login</a>
</template>

<script>
export default {
  methods: {
    login() {
      this.$auth.loginWith('laravelSanctum', {
        data: {
          email: 'admin@admin.com',
          password: 'secret'
        }
      })
      console.log('login')
    }
  },
}
</script>