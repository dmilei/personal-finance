<template>
  <li class="nav-item has-treeview menu-open">
    <nuxt-link :to="link" class="nav-link">
      <i class="nav-icon fas" :class="icon"></i>
      <p>
        {{ title }}
      </p>
    </nuxt-link>
  </li>
</template>

<script>
export default {
  name: 'sidebar-menu-item',
  props: {
    title: String,
    link: String,
    icon: String,
  }
}
</script>
