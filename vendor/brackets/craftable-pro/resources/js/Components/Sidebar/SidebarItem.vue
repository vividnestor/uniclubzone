<template>
  <Link
    :href="href"
    :class="[
      active
        ? 'bg-white text-orange-700'
        : 'text-white hover:bg-gray-200 hover:text-gray-900',
      'group/link flex items-center rounded-3xl px-2 py-2 text-base font-medium transition-colors',
    ]"
  >
    <component
      :is="icon"
      :class="[
        active
          ? 'text-orange-700'
          : 'text-gray-400 group-hover/link:text-gray-500',
        'mr-3 h-6 w-6 flex-shrink-0 transition-colors',
      ]"
      aria-hidden="true"
    />
    <slot />
  </Link>
</template>

<script setup lang="ts">
import { usePage } from "@inertiajs/vue3";
import type { Component } from "vue";
import { computed } from "vue";

interface Props {
  href: string;
  icon: Component;
}

const props = defineProps<Props>();

const active = computed(() => {
  const url = usePage().url.split("?")[0] + "/";
  const href = props.href.split("?")[0] + "/";

  return href.indexOf(url) !== -1;
});
</script>
