<template>
  <PageHeader
    sticky
    :title="$t('craftable-pro', 'Edit Event')"
    :subtitle="`Last updated at ${dayjs(
      event.updated_at
    ).format('DD.MM.YYYY')}`"
  >
    <Button style="background-color:darkorange;border-radius: 20px"
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.event.edit'"
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
import type { Event, EventForm } from "./types";
import dayjs from "dayjs";
import customParseFormat from "dayjs/plugin/customParseFormat";
import {getMediaCollection} from "craftable-pro/helpers";

dayjs.extend(customParseFormat);



interface Props {
  event: Event;
  categoryOptions: Array<{value: string|number, label: string}>;
clubOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();

const { form, submit } = useForm<EventForm>(
    {
          title: props.event?.title ?? "", 
content: props.event?.content ?? "", 
slug: props.event?.slug ?? "", 
published_at: props.event?.published_at ?? "", 
club_id: props.event?.club_id ?? "", 
category_id: props.event?.category_id ?? "", 
image: getMediaCollection(props.event?.media, 'image')
    },
    route("craftable-pro.events.update", [props.event?.id])
);
</script>
