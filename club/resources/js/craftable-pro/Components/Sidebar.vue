<template>
  <div>
    <nav class="mt-5 space-y-1">
        <SidebarItem
          :href="route('craftable-pro.dashboard')"
          :icon="CubeTransparentIcon"
        >
          {{ $t("Dashboard") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.clubstudent.index')"
          :icon="CubeTransparentIcon"
        >
          {{ $t("My Clubs") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.participationhistory.index')"
          :icon="CubeTransparentIcon"
        >
          {{ $t("Participation History") }}
        </SidebarItem>
        <!-- <SidebarItem
          :href="route('craftable-pro.applications.index')"
          :icon="CubeTransparentIcon"
        >
          {{ $t("Applications") }}
        </SidebarItem> -->
        <SidebarItem
          :href="route('craftable-pro.clubs.index')"
          :icon="CubeTransparentIcon"
            v-can="'craftable-pro.club.index'"
        >
          {{ $t("craftable-pro", "Clubs") }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.role-clubs.index')"
          :icon="CubeTransparentIcon"
          v-can="'craftable-pro.role-club.index'"
        >
          {{ 'User Club' }}
        </SidebarItem>
        <SidebarItem
          :href="route('craftable-pro.sub-roles.index')"
          :icon="CubeTransparentIcon"
          v-can="'craftable-pro.sub-role.index'"

        >
          {{ 'Role Club' }}
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
        <SidebarItem
          :href="route('craftable-pro.media.index')"
          :icon="PhotoIcon"
          v-can="'craftable-pro.media.index'"
        >
          {{ $t("craftable-pro", "Media") }}
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
import { SidebarItem, SidebarGroup, IconButton } from "craftable-pro/Components";
import { useUser } from "craftable-pro/hooks/useUser";


const { user } = useUser();

</script>
