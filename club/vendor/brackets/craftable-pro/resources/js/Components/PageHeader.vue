<template>
  
  <div
    class="w-full" :class="{'sticky top-0 z-30': sticky,}">

  <Head v-if="title" :title="title" />
    <header
      class="flex w-full border-b border-gray-200 bg-white"
      :class="{
        'py-3 sm:py-4': subtitle,
        'py-3 sm:py-5': !subtitle,
      }"
    >
      <!-- Spacer -->
    <div class="w-full">
      <!-- profile user -->
      <!-- <div class=" flex w-full justify-end">
        <div class="flex border-t border-gray-200 px-1 py-2 sm:p-1 bg-slate-200 mr-8 mb-4 rounded-3xl">
          <div class="flex w-full items-center">
            <Avatar
              :src="user?.avatar_url"
              :name="(user?.first_name || user?.last_name) ? `${user?.first_name} ${user?.last_name}` : `${user?.email}`"
            />
            <div class="ml-3 overflow-hidden text-ellipsis mr-3 " style="overflow: hidden; text-overflow: ellipsis">
              <p class="text-sm font-medium text-gray-700 overflow-hidden text-ellipsis">
                {{ (user?.first_name || user?.last_name) ? `${user?.first_name} ${user?.last_name}` : `${user?.email}` }}
              </p>
            </div>
            <UserDropdown class="ml-auto" />
          </div>
        </div>
      </div> -->
      <div class="px-10">
        <div class="flex w-full flex-wrap items-center justify-between gap-2 sm:flex-nowrap">
        <div class="mr-auto">
          <h3 v-if="title" class="text-xl font-medium leading-6 text-gray-900">
            {{ title }}
          </h3>
          <p v-if="subtitle" class="mt-1 text-sm text-gray-500">
            {{ subtitle }}
          </p>
        </div>
        <div class="flex-shrink-0">
          <slot />
        </div>
      </div>
      </div>
      
    </div>
      
    </header>
  </div>
</template>

<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { UserDropdown, Avatar } from "./index";

import { useUser } from "../hooks/useUser";

const { user } = useUser();

interface Props {
  title: string;
  subtitle?: string;
  sticky?: boolean;
}

withDefaults(defineProps<Props>(), {
  sticky: false,
});
</script>
