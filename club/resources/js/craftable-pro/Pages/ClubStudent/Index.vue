<template>
  
  <div>
    <div class="w-4/5 m-auto grid grid-cols-2 overflow-y-scroll mb-10">
        <div class=" col-span-2">
            <h1 class=" text-center font-bold text-4xl p-10 text-orange-700 decoration-orange-700 underline">MY CLUBS</h1>
        </div>
        <div class=" col-span-2">
          <h2 class=" text-center font-bold text-3xl p-4 text-black decoration-black underline">CLUBS YOU MANAGED</h2>
          <div class=" col-span-2 grid grid-cols-2 gap-5">
          <!-- club -->
              <template v-for="medias in media">
                <template v-for="clubs in club">
                  <template v-for="items in craftableProUsers.data">
                    <template v-for="item in items.roles">
                      <template v-if="item.pivot.model_id===user.id && item.name===('club_manager')">
                        <template v-if="medias.model_id===clubs.id && clubs.craftable_pro_users_id===user.id">
                          <a :href="`../Club.index/${clubs.id}`">
                              <div class=" col-span-1 h-44 bg-slate-100 rounded-2xl grid grid-cols-3 pl-8">
                                  <div class=" col-span-1 flex items-center justify-center">
                                    <img :src="'/media/' + medias.id + '/' + medias.file_name" alt="Logo">
                                  </div>
                                  <div class=" col-span-2 flex items-center justify-center w-full h-full p-5">
                                      <h3 class=" text-orange-700  font-bold text-2xl">{{ clubs.name }}</h3>
                                  </div>
                              </div>
                          </a>              
                        </template>
                      </template>
                    </template>
                  </template>
                </template>
              </template>
            </div>
        </div>
        <div class=" col-span-2">
            <h2 class=" text-center font-bold p-4 text-3xl text-black decoration-black underline">CLUBS YOU JOINED</h2>
            <div class=" col-span-2 grid grid-cols-2 gap-5">
                <!-- club  -->
            </div>
        </div>   
    </div>                  
</div>
  
</template>

<script setup lang="ts">

import { PaginatedCollection } from "craftable-pro/types/pagination";
import type { Club } from "./types";
import type { CraftableProUser, Role } from "craftable-pro/types/models";
import { useUser } from "craftable-pro/hooks/useUser";

const { user } = useUser();

  interface Props {
  craftableProUsers: PaginatedCollection<CraftableProUser>;
  roles: Role[];
  filterOptions: {
    roles: string[];
  };
  club:PaginatedCollection<Club>;
  media: PaginatedCollection<Club>;

}
defineProps<Props>();

</script>
