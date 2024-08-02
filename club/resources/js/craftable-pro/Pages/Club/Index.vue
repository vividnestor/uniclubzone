<template>
  
  <PageHeader :title="$t('Clubs List')">
    <Button style="background-color:darkorange;border-radius: 20px"
      :leftIcon="PlusIcon"
      :as="Link"
      :href="route('craftable-pro.clubs.create')"
      v-can="'craftable-pro.club.create'"
    >
    <span class=" font-bold">{{ $t("craftable-pro", "New Club") }}</span>
    </Button>
    
  </PageHeader>

  <PageContent>
  
    
    <Listing 
      :baseUrl="route('craftable-pro.clubs.index')"
      :data="clubs"
      dataKey="clubs"
      :withBulkSelect="false"
    >
      <template #tableHead>
        
        
        <ListingHeaderCell class=" w-1/8 text-center font-bold" style="color:black">
            {{ $t("No") }}
        </ListingHeaderCell> 
        <ListingHeaderCell class=" w-2/8 text-center font-bold text-black" style="color:black">
            {{ $t("Club Name") }}
        </ListingHeaderCell>
        <ListingHeaderCell class=" w-2/8 text-center font-bold text-black" style="color:black">
            {{ $t("Club Manager") }}
        </ListingHeaderCell> 
        <ListingHeaderCell class=" w-1/8 text-center font-bold text-black" style="color:black">
            {{ $t("craftable-pro", "Status") }}
        </ListingHeaderCell> 
        
        <ListingHeaderCell class=" w-2/8 text-center font-bold text-black" style="color:black">
          <span>{{ $t("craftable-pro", "Actions") }}</span>
        </ListingHeaderCell>
      </template>
      <template style="" #tableRow="{ item, action }: any">
        
        <ListingDataCell class=" w-1/8 text-center" style="color:black">
             0{{ item.id }}
        </ListingDataCell> 
        <ListingDataCell class=" w-2/8 text-center" style="color:black">
             {{ item.name }}
        </ListingDataCell>
        <ListingDataCell class=" w-2/8 text-center" style="color:black">
             {{ item.craftable_pro_user.email }}
        </ListingDataCell> 
        <ListingDataCell class="w-1/8 text-center">
            <!-- <ListingToggle name="active" v-model="item.active" :updateUrl="route('craftable-pro.clubs.update', item.id)" />  -->
            <p class=" bg-green-700 p-1 rounded-2xl text-white text-center font-bold" v-if="item.active===true">Active</p>
            <p class=" bg-yellow-500 p-1 rounded-2xl text-white text-center font-bold"  v-else="item.active===false">Die</p>
        </ListingDataCell> 
        
        
        <ListingDataCell class=" w-2/8 text-center">
          <div class="flex items-center justify-center w-full">
            <IconButton
              :as="Link"
              :href="route('craftable-pro.clubs.edit', item)"
              variant="ghost"
              color="gray"
              :icon="PencilSquareIcon"
              v-can="'craftable-pro.club.edit'"
            />

            <Modal type="danger">
              <template #trigger="{ setIsOpen }">
                <IconButton
                  @click="() => setIsOpen(true)"
                  color="gray"
                  variant="ghost"
                  :icon="TrashIcon"
                  v-can="'craftable-pro.club.destroy'"
                />
              </template>

              <template #title>
                {{ $t("craftable-pro", "Delete Club") }}
              </template>
              <template #content>
                {{
                  $t(
                    "craftable-pro",
                    "Are you sure you want to delete selected Club? All data will be permanently removed from our servers forever. This action cannot be undone."
                  )
                }}
              </template>

              <template #buttons="{ setIsOpen }">
                <Button
                  @click.prevent="
                    () => {
                      action('delete', route('craftable-pro.clubs.destroy', item), {
                        onFinish: () => setIsOpen(false),
                      });
                    }
                  "
                  color="danger"
                  v-can="'craftable-pro.club.destroy'"
                >
                  {{ $t("craftable-pro", "Delete") }}
                </Button>
                <Button
                  @click.prevent="() => setIsOpen()"
                  color="gray"
                  variant="outline"
                >
                  {{ $t("craftable-pro", "Cancel") }}
                </Button>
              </template>
            </Modal>
          </div>
        </ListingDataCell>
      </template>
    </Listing>
  </PageContent>
</template>

<script setup lang="ts">
import { Link, usePage } from "@inertiajs/vue3";
import {
    PlusIcon,
    TrashIcon,
    PencilSquareIcon,
    ArrowDownTrayIcon,
} from "@heroicons/vue/24/outline";
import {
    PageHeader,
    PageContent,
    Button,
    Listing,
    Avatar,
    ListingHeaderCell,
    ListingDataCell,
    Modal,
    Multiselect,
    IconButton,
    FiltersDropdown,
    Publish,
    ListingToggle,
} from "craftable-pro/Components";
import { PaginatedCollection } from "craftable-pro/types/pagination";
import type { Club } from "./types";
import type { PageProps } from "craftable-pro/types/page";
import dayjs from "dayjs";
import customParseFormat from "dayjs/plugin/customParseFormat";

dayjs.extend(customParseFormat)



interface Props {
  clubs: PaginatedCollection<Club>;
}
defineProps<Props>();

</script>
