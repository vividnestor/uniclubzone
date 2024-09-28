<template>
  <PageHeader sticky :title="$t('craftable-pro', 'Create Event')">
    <Button style="background-color:darkorange;border-radius: 20px"
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.event.create'"
    >
      {{ $t("craftable-pro", "Save") }}
    </Button>
  </PageHeader>
  <Form :form="form" :submit="submit" :categoryOptions="categoryOptions" :clubOptions="clubOptions" />
</template>

<script setup lang="ts">
import { ArrowDownTrayIcon } from "@heroicons/vue/24/outline";
import { PageHeader, Button } from "craftable-pro/Components";
import { useForm } from "craftable-pro/hooks/useForm";
import Form from "./Form.vue";
import type { EventForm } from "./types";
import dayjs from 'dayjs'



interface Props {
  categoryOptions: Array<{value: string|number, label: string}>;
clubOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();

const { form, submit } = useForm<EventForm>(
    {
          title: "", 
          content: "", 
          slug: "", 
          published_at: "", 
          club_id: "", 
          category_id: "", 
          image: []
    },
    route("craftable-pro.events.store"),
    "post"
);
</script>

