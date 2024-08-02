<template>
  <PageHeader :title="$t('craftable-pro', 'Club Pages')">
    <Button style="background-color:darkorange;border-radius: 20px"
      :leftIcon="PlusIcon"
      :as="Link"
      :href="route('craftable-pro.club-pages.create')"
      v-can="'craftable-pro.club-page.create'"
    >
      {{ $t("craftable-pro", "New Club Page") }}
    </Button>
    
  </PageHeader>

  <PageContent>
    <Listing
      :baseUrl="route('craftable-pro.club-pages.index')"
      :data="clubPages"
      dataKey="clubPages"
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
              v-can="'craftable-pro.club-page.destroy'"
            >
              {{ $t("craftable-pro", "Delete") }}
            </Button>
          </template>

          <template #title>
            {{ $t("craftable-pro", "Delete Club Page") }}
          </template>
          <template #content>
            {{
              $t(
                "craftable-pro",
                "Are you sure you want to delete selected Club Page? All data will be permanently removed from our servers forever. This action cannot be undone."
              )
            }}
          </template>

          <template #buttons="{ setIsOpen }">
            <Button
              @click.prevent="
                () => {
                  bulkAction('post', route('craftable-pro.club-pages.bulk-destroy'), {
                    onFinish: () => setIsOpen(false),
                  });
                }
              "
              color="danger"
              v-can="'craftable-pro.club-page.destroy'"
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
        
        <ListingHeaderCell style="color:black;font-weight: bold" class="w-1/11 text-center">
            {{ $t("No") }}
        </ListingHeaderCell> 
        <ListingHeaderCell style="color:black;font-weight: bold" class="w-2/11 text-center">
            {{ $t("craftable-pro", "Title") }}
        </ListingHeaderCell> 
        <ListingHeaderCell style="color:black;font-weight: bold" class="w-3/11 text-center">
            {{ $t("craftable-pro", "Content") }}
        </ListingHeaderCell> 
        <ListingHeaderCell style="color:black;font-weight: bold" class="w-2/11 text-center">
            {{ $t("craftable-pro", "Published At") }}
        </ListingHeaderCell> 
        <ListingHeaderCell style="color:black;font-weight: bold" class="w-1/11 text-center">
            {{ $t( "Users") }}
        </ListingHeaderCell> 
        <ListingHeaderCell style="color:black;font-weight: bold" class="w-1/11 text-center">
            {{ $t("Club") }}
        </ListingHeaderCell>
        <ListingHeaderCell style="color:black;font-weight: bold" class="w-1/11 text-center">
          <span>{{ $t("Actions") }}</span>
        </ListingHeaderCell>
      </template>
      <template #tableRow="{ item, action }: any">
        
        <ListingDataCell class="w-1/11 text-center" style="color:black">
             {{ item.id }}
        </ListingDataCell> 
        <ListingDataCell class="w-2/11 text-center" style="color:black">
             {{ item.title }}
        </ListingDataCell> 
        <ListingDataCell class="w-3/11 text-center" style="color:black">
             {{ item.content }}
        </ListingDataCell> 
        <ListingDataCell class="w-2/11 flex justify-center" style="color:black">
            <Publish :publishedAt="item.published_at" :updateUrl="route('craftable-pro.club-pages.update', item.id)" columnName="published_at" mode="dateTime"/>
        </ListingDataCell> 
        <ListingDataCell class="w-1/11 text-center" style="color:black">
             {{ item.craftable_pro_users_id }}
        </ListingDataCell> 
        <ListingDataCell class="w-1/11 text-center" style="color:black">
             {{ item.club_id }}
        </ListingDataCell>
        <ListingDataCell  class="w-1/11 justify-center" style="color:black">
          <div class="flex items-center justify-center gap-3">
            <IconButton
              :as="Link"
              :href="route('craftable-pro.club-pages.edit', item)"
              variant="ghost"
              color="gray"
              :icon="PencilSquareIcon"
              v-can="'craftable-pro.club-page.edit'"
            />

            <Modal type="danger">
              <template #trigger="{ setIsOpen }">
                <IconButton
                  @click="() => setIsOpen(true)"
                  color="gray"
                  variant="ghost"
                  :icon="TrashIcon"
                  v-can="'craftable-pro.club-page.destroy'"
                />
              </template>

              <template #title>
                {{ $t("craftable-pro", "Delete Club Page") }}
              </template>
              <template #content>
                {{
                  $t(
                    "craftable-pro",
                    "Are you sure you want to delete selected Club Page? All data will be permanently removed from our servers forever. This action cannot be undone."
                  )
                }}
              </template>

              <template #buttons="{ setIsOpen }">
                <Button
                  @click.prevent="
                    () => {
                      action('delete', route('craftable-pro.club-pages.destroy', item), {
                        onFinish: () => setIsOpen(false),
                      });
                    }
                  "
                  color="danger"
                  v-can="'craftable-pro.club-page.destroy'"
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
import type { ClubPage } from "./types";
import type { PageProps } from "craftable-pro/types/page";
import dayjs from "dayjs";
import customParseFormat from "dayjs/plugin/customParseFormat";

dayjs.extend(customParseFormat)



interface Props {
  clubPages: PaginatedCollection<ClubPage>;
}
defineProps<Props>();

</script>
