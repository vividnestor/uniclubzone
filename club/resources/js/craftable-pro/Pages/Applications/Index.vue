<template>
  
  <!-- <div v-for="items in craftableProUsers.data">
    <div v-for="item in items.roles">
      <div v-for="user in users">
        <div v-if="item.pivot.model_id===user.id">
          {{ item.name }} 
          {{ user.email }}
        </div>
      </div>
    </div> 
  </div> -->
</template>

<script setup lang="ts">
import { PaginatedCollection } from "craftable-pro/types/pagination";
import type { CraftableProUser, Role } from "craftable-pro/types/models";
import { useUser } from "craftable-pro/hooks/useUser";
import type { Club } from "./types";


const {user}=useUser();

interface Props {
  craftableProUsers: PaginatedCollection<CraftableProUser>;
  roles: Role[];
  filterOptions: {
    roles: string[];
  };
  users:PaginatedCollection<Club>;
  club:PaginatedCollection<Club>;

}


const props = defineProps<Props>();
</script>