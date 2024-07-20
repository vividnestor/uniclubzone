<template>
  <PageHeader
    sticky
    :title="$t('craftable-pro', 'Edit Club Page')"
    :subtitle="`Last updated at ${dayjs(
      clubPage.updated_at
    ).format('DD.MM.YYYY')}`"
  >
    <Button
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.club-page.edit'"
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
import type { ClubPage, ClubPageForm } from "./types";
import dayjs from "dayjs";
import customParseFormat from "dayjs/plugin/customParseFormat";


dayjs.extend(customParseFormat);



interface Props {
  clubPage: ClubPage;
  
}

const props = defineProps<Props>();

const { form, submit } = useForm<ClubPageForm>(
    {
          title: props.clubPage?.title ?? "", 
content: props.clubPage?.content ?? "", 
slug: props.clubPage?.slug ?? "", 
published_at: props.clubPage?.published_at ?? "", 
craftable_pro_users_id: props.clubPage?.craftable_pro_users_id ?? "", 
club_id: props.clubPage?.club_id ?? ""
    },
    route("craftable-pro.club-pages.update", [props.clubPage?.id])
);
</script>
