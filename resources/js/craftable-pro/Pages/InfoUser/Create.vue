<template>
  
  <PageHeader sticky :title="$t('craftable-pro', 'Create Info User')">
    <Button style="background-color:darkorange;border-radius: 20px"
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.info-user.create'"
    >
      {{ $t("craftable-pro", "Save") }}
    </Button>
  </PageHeader>

  <Form :form="form" :submit="submit"  />
</template>

<script setup lang="ts">
import { ArrowDownTrayIcon } from "@heroicons/vue/24/outline";
import { PageHeader, Button } from "craftable-pro/Components";
import { useForm } from "craftable-pro/hooks/useForm";
import Form from "./Form.vue";
import type { InfoUserForm } from "./types";
import dayjs from 'dayjs'
import { useUser } from "craftable-pro/hooks/useUser";

const {user}=useUser();

interface Props {
  
}

const props = defineProps<Props>();

const { form, submit } = useForm<InfoUserForm>(
    {
          username: "", 
gender: "", 
department: "", 
year: "", 
phone: "", 
craftable_pro_users_id: user.value.id?.toString()
    },
    route("craftable-pro.info-users.store"),
    "post"
);
</script>
