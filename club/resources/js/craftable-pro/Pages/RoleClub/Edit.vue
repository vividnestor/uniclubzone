<template>
  <PageHeader
    sticky
    :title="$t('craftable-pro', 'Edit Role Club')"
    :subtitle="`Last updated at ${dayjs(
      roleClub.updated_at
    ).format('DD.MM.YYYY')}`"
  >
    <Button style="background-color:darkorange;border-radius: 20px"
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.role-club.edit'"
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
import type { RoleClub, RoleClubForm } from "./types";
import dayjs from "dayjs";
import customParseFormat from "dayjs/plugin/customParseFormat";


dayjs.extend(customParseFormat);



interface Props {
  roleClub: RoleClub;
  infoUserOptions: Array<{value: string|number, label: string}>;
clubOptions: Array<{value: string|number, label: string}>;
subRoleOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();

const { form, submit } = useForm<RoleClubForm>(
    {
          info_users_id: props.roleClub?.info_users_id ?? "", 
club_id: props.roleClub?.club_id ?? "", 
sub_role_id: props.roleClub?.sub_role_id ?? ""
    },
    route("craftable-pro.role-clubs.update", [props.roleClub?.id])
);
</script>
