<template>
  <div class="wrapper">
    <header-panel />

    <sidebar-panel />

    <nuxt />

    <footer-panel />
  </div>
</template>

<script>
import HeaderPanel from '../components/layout/header/Panel.vue';
import SidebarPanel from '../components/layout/sidebar/Panel.vue';
import FooterPanel from '../components/layout/footer/Panel.vue';

export default {
  components: {
    HeaderPanel,
    SidebarPanel,
    FooterPanel
  }
}
</script>
