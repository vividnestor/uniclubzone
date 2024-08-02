<template>
  <div class="flex flex-1 flex-col border-r border-gray-200 bg-gray-100">
    <div class="h-0 flex-1 overflow-y-auto pb-4 pt-5 xl:pl-2">
      <div class="flex flex-shrink-0 items-center px-4">
        <div class="h-10" />
        <Logo />
      </div>
      <SidebarContent class="px-4" />
    </div>
  </div>
</template>

<script setup lang="ts">
import Logo from "@/craftable-pro/Components/Logo.vue";
import SidebarContent from "@/craftable-pro/Components/Sidebar.vue";
</script>
