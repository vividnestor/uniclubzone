<template>
  <PageHeader :title="$t('craftable-pro', 'Role Clubs')">
    <Button style="background-color:darkorange;border-radius: 20px"
      :leftIcon="PlusIcon"
      :as="Link"
      :href="route('craftable-pro.role-clubs.create')"
      v-can="'craftable-pro.role-club.create'"
    >
      {{ $t("craftable-pro", "New Role Club") }}
    </Button>
    
  </PageHeader>

  <PageContent>
    <Listing
      :baseUrl="route('craftable-pro.role-clubs.index')"
      :data="roleClubs"
      dataKey="roleClubs"
      :withBulkSelect="false"
      
    >
      <template #bulkActions="{ bulkAction }">
        <Modal type="danger">
          <template #trigger="{ setIsOpen }">
            <Button
              @click="() => setIsOpen(true)"
              color="gray"
              variant="outline"
              size="sm"
              :leftIcon="TrashIcon"
              v-can="'craftable-pro.role-club.destroy'"
            >
              {{ $t("craftable-pro", "Delete") }}
            </Button>
          </template>

          <template #title>
            {{ $t("craftable-pro", "Delete Role Club") }}
          </template>
          <template #content>
            {{
              $t(
                "craftable-pro",
                "Are you sure you want to delete selected Role Club? All data will be permanently removed from our servers forever. This action cannot be undone."
              )
            }}
          </template>

          <template #buttons="{ setIsOpen }">
            <Button
              @click.prevent="
                () => {
                  bulkAction('post', route('craftable-pro.role-clubs.bulk-destroy'), {
                    onFinish: () => setIsOpen(false),
                  });
                }
              "
              color="danger"
              v-can="'craftable-pro.role-club.destroy'"
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
      </template>
      <template #tableHead>
        
        <ListingHeaderCell sortBy="id" class=" w-1/12 text-center" style="color:black;font-weight: bold">
            {{ $t("craftable-pro", "Id") }}
        </ListingHeaderCell> 
        <ListingHeaderCell sortBy="info_users_id" class=" w-3/12 text-center" style="color:black;font-weight: bold">
            {{ $t("craftable-pro", "Info User") }}
        </ListingHeaderCell> 
        <ListingHeaderCell sortBy="club_id" class=" w-4/12 text-center" style="color:black;font-weight: bold">
            {{ $t("craftable-pro", "Club") }}
        </ListingHeaderCell> 
        <ListingHeaderCell sortBy="sub_role_id" class=" w-2/12 text-center" style="color:black;font-weight: bold">
            {{ $t("craftable-pro", "Sub Role") }}
        </ListingHeaderCell>
        <ListingHeaderCell class=" w-2/12 text-center" style="color:black;font-weight: bold">
          {{ $t("craftable-pro", "Actions") }}
        </ListingHeaderCell>
      </template>
      <template #tableRow="{ item, action }: any">
        <ListingDataCell class=" w-1/12 text-center" style="color:black;">
             {{ item.id }}
        </ListingDataCell> 
        <ListingDataCell class=" w-3/12 text-center" style="color:black;">
             {{ item.info_user.username }}
        </ListingDataCell> 
        <ListingDataCell class=" w-4/12 text-center" style="color:black;">
             {{ item.club.name }}
        </ListingDataCell> 
        <ListingDataCell class=" w-2/12 text-center" style="color:black;">
             {{ item.sub_role.name }}
        </ListingDataCell>
        <ListingDataCell class=" w-2/12 text-center" style="color:black;">
          <div class="flex items-center justify-center gap-3">
            <IconButton
              :as="Link"
              :href="route('craftable-pro.role-clubs.edit', item)"
              variant="ghost"
              color="gray"
              :icon="PencilSquareIcon"
              v-can="'craftable-pro.role-club.edit'"
            />

            <Modal type="danger">
              <template #trigger="{ setIsOpen }">
                <IconButton
                  @click="() => setIsOpen(true)"
                  color="gray"
                  variant="ghost"
                  :icon="TrashIcon"
                  v-can="'craftable-pro.role-club.destroy'"
                />
              </template>

              <template #title>
                {{ $t("craftable-pro", "Delete Role Club") }}
              </template>
              <template #content>
                {{
                  $t(
                    "craftable-pro",
                    "Are you sure you want to delete selected Role Club? All data will be permanently removed from our servers forever. This action cannot be undone."
                  )
                }}
              </template>

              <template #buttons="{ setIsOpen }">
                <Button
                  @click.prevent="
                    () => {
                      action('delete', route('craftable-pro.role-clubs.destroy', item), {
                        onFinish: () => setIsOpen(false),
                      });
                    }
                  "
                  color="danger"
                  v-can="'craftable-pro.role-club.destroy'"
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
import type { RoleClub } from "./types";
import type { PageProps } from "craftable-pro/types/page";
import dayjs from "dayjs";
import customParseFormat from "dayjs/plugin/customParseFormat";

dayjs.extend(customParseFormat)



interface Props {
  roleClubs: PaginatedCollection<RoleClub>;
}
defineProps<Props>();

</script>
