<template>
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <sidebar-menu-item
        v-for="menuItem in menuItems"
        :key="menuItem.title"
        :title="menuItem.title"
        :link="menuItem.link"
        :icon="menuItem.icon"
      />
    </ul>
  </nav>
</template>

<script>
import SidebarMenuItem from './MenuItem';

export default {
  name: 'sidebar-menu',
  components: {
    SidebarMenuItem,
  },
  data() {
    return {
      menuItems: [
        {
          title: 'Dashboard',
          link: '#',
          icon: 'fa-tachometer-alt',
        },
        {
          title: 'Widgets',
          link: '#',
          icon: 'fa-th',
        },
      ]
    }
  }
}
</script>
