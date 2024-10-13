<template>
    <div class="mt-8">
        <div class="w-full p-10 m-auto">
            <h2 class=" text-2xl font-bold mb-8">Participation History</h2>
            <template v-if="true">
                <div class=" grid grid-cols-2 gap-5 mb-10">
                    <div class=" col-span-1 bg-white h-44 flex items-center justify-center pt-10 pb-10 pl-16 pr-16">
                        <!-- profile -->
                        <div class="w-2/5">
                            <template v-if="user.avatar_url!==''">
                                <div v-for="medias in media">
                                    <div v-if="medias.model_id===user.id">
                                        <img class="w-32 h-32 rounded-full"  :src="'/media/' + medias.id + '/' + medias.file_name" alt="Logo">
                                    </div>
                                </div>
                            </template>
                            <template v-else>
                                <div class="w-32 h-32 rounded-full flex items-center justify-center bg-orange-500 font-bold text-4xl text-white">
                                    {{ user.initials }}
                                </div>
                            </template>
                        </div>
                        <!-- information -->
                        <div class="w-3/5 items-center justify-start">
                            <h3 class=" text-1xl font-bold">{{ user.first_name }} {{ user.last_name }}</h3>
                            <p>{{ user.email }}</p>
                        </div>
                    </div>
                    <template v-for="infoUser in infoUsers">  
                        <div v-if="infoUser.craftable_pro_users_id==user.id">
                            <div class=" col-span-1 grid grid-cols-2 gap-5 p-6 bg-white h-44">
                                <div class=" col-span-1">
                                    <div class="h-1/2">
                                        <h4>Gender</h4>
                                        <h4 class=" font-bold">{{infoUser.gender}}</h4>
                                    </div>
                                    <div class="h-1/2">
                                        <h4>Department</h4>
                                        <h4 class=" font-bold">{{ infoUser.department }}</h4>
                                    </div>
                                </div>
                                <div class=" col-span-1">
                                    <div class="h-1/2">
                                        <h4>Academic Yaer</h4>
                                        <h4 class=" font-bold">{{ infoUser.year }}</h4>
                                    </div>
                                    <div class="h-1/2">
                                        <h4>Phone Number</h4>
                                        <h4 class=" font-bold">{{infoUser.phone}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                    </template>
                </div>
            </template>
            <h3 class=" text-1xl font-bold mb-2">Participation History</h3>
            <div class="w-full bg-white">
                <div class=" flex items-center w-full justify-around text-center mb-2">
                    <p class=" w-1/12">#</p>
                    <p class=" w-4/12">Club Name</p>
                    <p class=" w-2/12">Role</p>
                    <p class=" w-2/12">Batches</p>
                    <p class=" w-2/12">Status</p>
                </div>
                <hr>
                <div v-for="items in craftableProUsers.data">
                    <div v-for="UserClubs in UserClub">
                        <div v-for="infoUser in infoUsers">
                            <div v-if=" user.id == infoUser.craftable_pro_users_id && infoUser.id==UserClubs.info_users_id && items.id==user.id">
                                <div v-for="clubs in club">
                                    <div v-for="SubRoles in SubRole">
                                        <div v-if="UserClubs.club_id==clubs.id && UserClubs.sub_role_id==SubRoles.id">
                                            <div class=" flex items-center w-full justify-around mb-2 pt-2 pb-2 text-center">
                                                <p class=" w-1/12">{{ loopCounter++ }}</p>
                                                <p class=" w-4/12">{{clubs.name}}</p>
                                                <p class=" w-2/12">{{ SubRoles.name }}</p>
                                                <p class=" w-2/12 substring">{{ substring(clubs.created_at,4) }}</p>
                                                <div v-if="clubs.active===1" class=" w-2/12 flex items-center justify-center">
                                                    <p class=" w-20 bg-green-700 text-white rounded-2xl">Active</p>
                                                </div>
                                                <div v-else class=" w-2/12 flex items-center justify-center">
                                                    <p class=" w-20 bg-yellow-700 text-white rounded-2xl">Idle</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>   
                            </div>
                        </div>      
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { PaginatedCollection } from "craftable-pro/types/pagination";
import type { CraftableProUser, Info, Role } from "craftable-pro/types/models";
import { useUser } from "craftable-pro/hooks/useUser";
import type { Club } from "./types";

const {user}=useUser();

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
const loopCounter=1;
defineProps<Props>();
    function substring(text, length) {
  return text.substring(0, length);
}

</script>
