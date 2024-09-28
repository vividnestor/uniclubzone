<template>
  <!-- {{ Info }} -->
  <!-- {{ allUsers }} -->
  <!-- {{ userId }} -->
  <!-- <div v-if="userInfo.craftable_pro_users_id==user.id">
    Hello
  </div>
  <div v-else>
    hi
  </div> -->
  
  <div class="flex h-screen overflow-hidden"> 
    <!-- Sidebar --> 
    <TransitionRoot as="template" :show="sidebarOpen"> 
      <Dialog 
        as="div" 
        class="fixed inset-0 z-50 flex" 
        @close="sidebarOpen = false"
      > 
        <TransitionChild 
          as="template" 
          enter="transition-opacity ease-linear duration-300" 
          enter-from="opacity-0" 
          enter-to="opacity-100" 
          leave="transition-opacity ease-linear duration-300" 
          leave-from="opacity-100" 
          leave-to="opacity-0" 
        > 
          <DialogOverlay class="fixed inset-0 bg-gray-600 bg-opacity-75" /> 
        </TransitionChild> 
        <TransitionChild 
          as="div" 
          class="relative flex w-64 bg-white" 
          enter="transition ease-in-out duration-300 transform" 
          enter-from="-translate-x-full" 
          enter-to="translate-x-0" 
          leave="transition ease-in-out duration-300 transform" 
          leave-from="translate-x-0" 
          leave-to="-translate-x-full" 
        > 
          <div class="relative flex-1 flex flex-col max-w-xs w-full"> 
            <TransitionChild 
              as="template" 
              enter="ease-in-out duration-300" 
              enter-from="opacity-0" 
              enter-to="opacity-100" 
              leave="ease-in-out duration-300" 
              leave-from="opacity-100" 
              leave-to="opacity-0" 
            > 
              <div class="absolute left-full top-0 flex w-16 justify-center pt-1"> 
                <button 
                  type="button" 
                  class="p-2.5" 
                  @click="sidebarOpen = false" 
                > 
                  <span class="sr-only">Close sidebar</span> 
                  <XMarkIcon class="h-6 w-6 text-white" aria-hidden="true" /> 
                </button> 
              </div> 
            </TransitionChild> 
            <Sidebar class="relative h-full w-full" style="background-color: black;"/> 
          </div> 
        </TransitionChild> 
        <div class="w-14 flex-shrink-0"> 
          <!-- Force sidebar to shrink to fit close icon --> 
        </div> 
      </Dialog> 
    </TransitionRoot> 
  
    <!-- Main content --> 
    <div class="flex flex-col flex-1 overflow-hidden"> 
      <!-- Navbar -->
      <div class="h-20 relative flex-shrink-0 flex bg-white border-b border-gray-200 z-10"> 
        <button 
          type="button" 
          class="px-5 h-20  border-r border-gray-200 text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-600" 
          @click="sidebarOpen = true" 
        > 
          <span class="sr-only">Open sidebar</span> 
          <Bars3Icon class="h-6 w-6" aria-hidden="true" /> 
        </button> 
        <div class=" w-full flex items-center justify-between px-4"> 
          <div class=" w-2/9 flex"> 
            <div class="flex-shrink-0 flex items-center"> 
              <Logo /> 
            </div> 
          </div>
          <div class="flex h-14 w-2/9 flex-shrink-0 border-t border-gray-200 bg-gray-100 sm:p-4 rounded-full"> 
            <!-- profile user  --> 
            <div class="flex w-full items-center"> 
              <Avatar 
                :src="user?.avatar_url" 
                :name="(user?.first_name || user?.last_name) ? `${user?.first_name} ${user?.last_name}` : `${user?.email}`"
              /> 
              <div class="ml-3 overflow-hidden text-ellipsis" style="overflow: hidden; text-overflow: ellipsis"> 
                <p class="text-sm font-medium text-gray-700 overflow-hidden text-ellipsis"> 
                  {{ (user?.first_name || user?.last_name) ? `${user?.first_name} ${user?.last_name}` : `${user?.email}` }} 
                </p> 
              </div> 
              <UserDropdown class="ml-auto" /> 
            </div> 
          </div> 
        </div> 
      </div> 
      <!-- Main content area --> 
      <main class="flex-1 relative overflow-y-auto focus:outline-none"> 
        <slot> 
          <div class="py-6"> 
            <div class="px-4 sm:px-6 md:px-8"> 
              <div class="flex items-center justify-center h-96 rounded-lg border-4 border-dashed border-gray-200"> 
                <span class="text-xl italic text-gray-300"> 
                  {{ $t("craftable-pro", "Your content goes here...") }} 
                </span> 
              </div> 
            </div> 
          </div> 
        </slot> 
      </main> 
    </div> 
  </div>
  <TwoFactorAuthenticationNoticeModal :open="twoFactorAuthenticationNoticeModalOpened" @toggle-open="twoFactorAuthenticationNoticeModalOpened = !twoFactorAuthenticationNoticeModalOpened" /> 
 
</template> 
 
<script setup lang="ts"> 
import { computed, onMounted, ref } from "vue"; 
import { Dialog, DialogOverlay, TransitionChild, TransitionRoot } from "@headlessui/vue"; 
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline"; 
import { Sidebar } from "craftable-pro/Components"; 
import Logo from "@/craftable-pro/Components/Logo.vue"; 
import { router, usePage } from "@inertiajs/vue3"; 
import TwoFactorAuthenticationNoticeModal from "craftable-pro/Pages/Auth/TwoFactorAuthenticationNoticeModal.vue"; 
import { useUser } from "../hooks/useUser"; 
// import { UserDropdown, Avatar } from "@/index"; 
import { Avatar, UserDropdown } from "craftable-pro/Components"; 
import { PaginatedCollection } from "craftable-pro/types/pagination";
import type { InfoUser } from "./types";
import { all } from "axios";

interface Props {
  infoUsers: InfoUser;
}
const props = defineProps<Props>();
// const Info = props.infoUsers[0];
const { user } = useUser();

// const allUsers=[];
// props.infoUsers.forEach(users => {
//   allUsers.push(users.id);
// });
// console.log(allUsers);



 
const sidebarOpen = ref(false); 
const twoFactorAuthenticationNoticeModalOpened = ref<boolean>(false); 
 
const page = usePage(); 
const showTwoFactorCTA = computed(() => !!(page.props.auth.showTwoFactorCTA)); 
 
onMounted(() => { 
  twoFactorAuthenticationNoticeModalOpened.value = showTwoFactorCTA.value; 
}); 
 
router.on("success", () => { 
  if (sidebarOpen.value) { 
    sidebarOpen.value = false; 
  } 
}); 
</script> 
 
<style scoped> 
  /* Add your custom styles here */ 
</style>