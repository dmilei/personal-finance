<template>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <sidebar-logo />
    <div class="sidebar">
      <sidebar-user-badge />
      <sidebar-menu />
    </div>
  </aside>
</template>

<script>
import SidebarMenu from './Menu';
import SidebarLogo from "./Logo";
import SidebarUserBadge from "./UserBadge";

export default {
  name: 'sidebar-panel',
  components: {
    SidebarLogo,
    SidebarUserBadge,
    SidebarMenu,
  }
}
</script>
