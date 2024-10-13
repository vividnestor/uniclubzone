<template>
  
  <div>
    <div class="w-4/5 m-auto grid grid-cols-2 mb-10">
        <div class=" col-span-2">
            <h1 class=" text-center font-bold text-4xl p-10 text-orange-700 decoration-orange-700 underline">MY CLUBS</h1>
          </div>
          <div class=" col-span-2">
          <template v-for="items in craftableProUsers.data">
            <template v-for="item in items.roles">
              <template v-if="item.pivot.model_id===user.id && item.name===('club_manager')">
                <h2 class=" text-center font-bold text-3xl p-4 text-black decoration-black underline">CLUBS YOU MANAGED</h2>
              </template>
            </template>
          </template>
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
          <template v-for="items in craftableProUsers.data">
            <template v-for="item in items.roles">
              <template v-if="item.pivot.model_id===user.id && item.name===('student')">
                <h2 class=" text-center font-bold p-4 text-3xl text-black decoration-black underline">CLUBS YOU JOINED</h2>
              </template>
            </template>
          </template>
          <div class=" col-span-2 grid grid-cols-2 gap-5">
            <!-- club  -->
            <template v-for="medias in media">
              <template v-for="clubs in club">
                  <template v-for="items in craftableProUsers.data">
                    <template v-for="item in items.roles">
                      <template v-if="item.pivot.model_id===user.id && item.name===('student')">
                        <template v-for="UserClubs in UserClub">
                            <template v-for="infoUser in infoUsers">
                                <template v-if=" user.id == infoUser.craftable_pro_users_id && infoUser.id==UserClubs.info_users_id && items.id==user.id">  
                                    <template v-for="SubRoles in SubRole">
                                      <template v v-if="UserClubs.club_id==clubs.id && UserClubs.sub_role_id==SubRoles.id && SubRoles.name=='member'">
                                        <template v-if="medias.model_id===clubs.id ">
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
                      </template>
                    </template>
                  </template>
                  
                </template>
              </template>
            </div>
        </div>   
    </div>                  
</div>
  
</template>

<script setup lang="ts">

import { PaginatedCollection } from "craftable-pro/types/pagination";
import type { Club,Info } from "./types";
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
  infoUsers:PaginatedCollection<Info>
  UserClub:PaginatedCollection<Info>
  SubRole:PaginatedCollection<Info>

}
defineProps<Props>();

</script>
