<template>
  <PageHeader sticky :title="$t('craftable-pro', 'Create Club')">
    <Button
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.club.create'"
    >
      {{ $t("craftable-pro", "Save") }}
    </Button>
  </PageHeader>

  <Form :form="form" :submit="submit" :craftableProUserOptions="craftableProUserOptions" />
</template>

<script setup lang="ts">
import { ArrowDownTrayIcon } from "@heroicons/vue/24/outline";
import { PageHeader, Button } from "craftable-pro/Components";
import { useForm } from "craftable-pro/hooks/useForm";
import Form from "./Form.vue";
import type { ClubForm } from "./types";
import dayjs from 'dayjs'



interface Props {
  craftableProUserOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();

const { form, submit } = useForm<ClubForm>(
    {
          name: "", 
description: "", 
active: false, 
delete_flag: false, 
published_at: "", 
craftable_pro_users_id: "", 
image: []
    },
    route("craftable-pro.clubs.store"),
    "post"
);
</script>
