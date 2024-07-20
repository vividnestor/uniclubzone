<template>
  <PageHeader :title="$t('craftable-pro', 'Clubs')">
    <Button
      :leftIcon="PlusIcon"
      :as="Link"
      :href="route('craftable-pro.clubs.create')"
      v-can="'craftable-pro.club.create'"
    >
      {{ $t("craftable-pro", "New Club") }}
    </Button>
    
  </PageHeader>

  <PageContent>
    <Listing
      :baseUrl="route('craftable-pro.clubs.index')"
      :data="clubs"
      dataKey="clubs"
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
              v-can="'craftable-pro.club.destroy'"
            >
              {{ $t("craftable-pro", "Delete") }}
            </Button>
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
                  bulkAction('post', route('craftable-pro.clubs.bulk-destroy'), {
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
      </template>
      <template #tableHead>
        
        <ListingHeaderCell sortBy="id">
            {{ $t("craftable-pro", "Id") }}
        </ListingHeaderCell> 
        <ListingHeaderCell sortBy="name">
            {{ $t("craftable-pro", "Name") }}
        </ListingHeaderCell> 
        <ListingHeaderCell sortBy="description">
            {{ $t("craftable-pro", "Description") }}
        </ListingHeaderCell> 
        <ListingHeaderCell sortBy="active">
            {{ $t("craftable-pro", "Active") }}
        </ListingHeaderCell> 
        <ListingHeaderCell sortBy="delete_flag">
            {{ $t("craftable-pro", "Delete Flag") }}
        </ListingHeaderCell> 
        <ListingHeaderCell sortBy="published_at">
            {{ $t("craftable-pro", "Published At") }}
        </ListingHeaderCell> 
        <ListingHeaderCell sortBy="craftable_pro_users_id">
            {{ $t("craftable-pro", "Craftable Pro User") }}
        </ListingHeaderCell>
        <ListingHeaderCell>
          <span class="sr-only">{{ $t("craftable-pro", "Actions") }}</span>
        </ListingHeaderCell>
      </template>
      <template #tableRow="{ item, action }: any">
        
        <ListingDataCell>
             {{ item.id }}
        </ListingDataCell> 
        <ListingDataCell>
             {{ item.name }}
        </ListingDataCell> 
        <ListingDataCell>
             {{ item.description }}
        </ListingDataCell> 
        <ListingDataCell>
            <ListingToggle name="active" v-model="item.active" :updateUrl="route('craftable-pro.clubs.update', item.id)" />
        </ListingDataCell> 
        <ListingDataCell>
            <ListingToggle name="delete_flag" v-model="item.delete_flag" :updateUrl="route('craftable-pro.clubs.update', item.id)" />
        </ListingDataCell> 
        <ListingDataCell>
            <Publish :publishedAt="item.published_at" :updateUrl="route('craftable-pro.clubs.update', item.id)" columnName="published_at" mode="dateTime"/>
        </ListingDataCell> 
        <ListingDataCell>
             {{ item.craftable_pro_user.email }}
        </ListingDataCell>
        <ListingDataCell>
          <div class="flex items-center justify-end gap-3">
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
