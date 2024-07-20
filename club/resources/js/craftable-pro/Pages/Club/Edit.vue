<template>
  <PageHeader
    sticky
    :title="$t('craftable-pro', 'Edit Club')"
    :subtitle="`Last updated at ${dayjs(
      club.updated_at
    ).format('DD.MM.YYYY')}`"
  >
    <Button
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.club.edit'"
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
import type { Club, ClubForm } from "./types";
import dayjs from "dayjs";
import customParseFormat from "dayjs/plugin/customParseFormat";
import {getMediaCollection} from "craftable-pro/helpers";

dayjs.extend(customParseFormat);



interface Props {
  club: Club;
  craftableProUserOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();

const { form, submit } = useForm<ClubForm>(
    {
          name: props.club?.name ?? "", 
description: props.club?.description ?? "", 
active: props.club?.active ?? false, 
delete_flag: props.club?.delete_flag ?? false, 
published_at: props.club?.published_at ?? "", 
craftable_pro_users_id: props.club?.craftable_pro_users_id ?? "", 
image: getMediaCollection(props.club?.media, 'image')
    },
    route("craftable-pro.clubs.update", [props.club?.id])
);
</script>
