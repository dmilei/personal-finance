<template>
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="~assets/images/user.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <nuxt-link to="#" class="d-block">John Doe</nuxt-link>
    </div>
  </div>
</template>

<script>
export default {
  name: 'sidebar-user-badge'
}
</script>
