<template>
  <PageHeader
    sticky
    :title="$t('craftable-pro', 'Edit Info User')"
    :subtitle="`Last updated at ${dayjs(
      infoUser.updated_at
    ).format('DD.MM.YYYY')}`"
  >
    <Button style="background-color:darkorange;border-radius: 20px"
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.info-user.edit'"
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
import type { InfoUser, InfoUserForm } from "./types";
import dayjs from "dayjs";
import customParseFormat from "dayjs/plugin/customParseFormat";


dayjs.extend(customParseFormat);



interface Props {
  infoUser: InfoUser;
  
}

const props = defineProps<Props>();

const { form, submit } = useForm<InfoUserForm>(
    {
          username: props.infoUser?.username ?? "", 
gender: props.infoUser?.gender ?? "", 
department: props.infoUser?.department ?? "", 
year: props.infoUser?.year ?? "", 
phone: props.infoUser?.phone ?? "", 
craftable_pro_users_id: props.infoUser?.craftable_pro_users_id ?? ""
    },
    route("craftable-pro.info-users.update", [props.infoUser?.id])
);
</script>
