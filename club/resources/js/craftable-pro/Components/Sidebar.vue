<template>
  <div>
    <nav class="mt-5 space-y-1">
        <SidebarItem
          :href="route('craftable-pro.media.index')"
          :icon="PhotoIcon"
          v-can="'craftable-pro.media.index'"
        >
          {{ $t("craftable-pro", "Media") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.clubs.index')"
          :icon="CubeTransparentIcon"
            v-can="'craftable-pro.club.index'"
        >
          {{ $t("craftable-pro", "Clubs") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.events.index')"
          :icon="CubeTransparentIcon"
            v-can="'craftable-pro.event.index'"
        >
          {{ $t("craftable-pro", "Events") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.categories.index')"
          :icon="CubeTransparentIcon"
            v-can="'craftable-pro.category.index'"
        >
          {{ $t("craftable-pro", "Categories") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.club-pages.index')"
          :icon="CubeTransparentIcon"
            v-can="'craftable-pro.club-page.index'"
        >
          {{ $t("craftable-pro", "Club Pages") }}
        </SidebarItem>
        <!--AppendGeneratorLink-->
        <SidebarItem
          :href="route('craftable-pro.craftable-pro-users.index')"
          :icon="UsersIcon"
          v-can="'craftable-pro.craftable-pro-user.index'"
        >
          {{ $t("Members") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.roles.index')"
          :icon="KeyIcon"
          v-can="'craftable-pro.role.index'"
        >
          {{ $t("craftable-pro", "Roles") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.translations.index')"
          :icon="LanguageIcon"
          v-can="'craftable-pro.translation.index'"
        >
          {{ $t("craftable-pro", "Localization") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.settings.index')"
          :icon="Cog8ToothIcon"
          v-can="'craftable-pro.settings.edit'"
        >
          {{ $t("craftable-pro", "Settings") }}
        </SidebarItem>
    </nav>
  </div>
</template>

<script setup lang="ts">
import {
  KeyIcon,
  LanguageIcon,
  PhotoIcon,
  UsersIcon,
  Cog8ToothIcon,
  CubeTransparentIcon,
} from "@heroicons/vue/24/outline";
import { SidebarItem, SidebarGroup } from "craftable-pro/Components";
</script>
