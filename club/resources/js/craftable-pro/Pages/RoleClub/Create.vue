<template>
  <PageHeader sticky :title="$t('craftable-pro', 'Create Role Club')">
    <Button style="background-color:darkorange;border-radius: 20px"
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.role-club.create'"
    >
      {{ $t("craftable-pro", "Save") }}
    </Button>
  </PageHeader>

  <Form :form="form" :submit="submit" :infoUserOptions="infoUserOptions" :clubOptions="clubOptions" :subRoleOptions="subRoleOptions" />
</template>

<script setup lang="ts">
import { ArrowDownTrayIcon } from "@heroicons/vue/24/outline";
import { PageHeader, Button } from "craftable-pro/Components";
import { useForm } from "craftable-pro/hooks/useForm";
import Form from "./Form.vue";
import type { RoleClubForm } from "./types";
import dayjs from 'dayjs'



interface Props {
  infoUserOptions: Array<{value: string|number, label: string}>;
clubOptions: Array<{value: string|number, label: string}>;
subRoleOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();

const { form, submit } = useForm<RoleClubForm>(
    {
          info_users_id: "", 
club_id: "", 
sub_role_id: ""
    },
    route("craftable-pro.role-clubs.store"),
    "post"
);
</script>
