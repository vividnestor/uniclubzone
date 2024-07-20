<template>
  <PageContent>
    <div class="mx-auto max-w-3xl 2xl:max-w-4xl">
      

      <Card>
        <div class="space-y-4">
            <TextInput
                v-model="form.title"
                name="title"
                :label="$t('craftable-pro', 'Title')"
                
            /> 

            <Wysiwyg
                v-model="form.content"
                name="content"
                :label="$t('craftable-pro', 'Content')"
            /> 

            <TextInput
                v-model="form.slug"
                name="slug"
                :label="$t('craftable-pro', 'Slug')"
                
            /> 

            <DatePicker
                v-model="form.published_at"
                name="published_at"
                mode="dateTime"
                :label="$t('craftable-pro', 'Published At')"
                
            /> 

            <TextInput
                v-model="form.craftable_pro_users_id"
                name="craftable_pro_users_id"
                :label="$t('craftable-pro', 'Craftable Pro Users Id')"
                
            /> 

            <TextInput
                v-model="form.club_id"
                name="club_id"
                :label="$t('craftable-pro', 'Club Id')"
                
            /></div>
      </Card>
    </div>
  </PageContent>
</template>

<script setup lang="ts">
import { ref } from "vue"
import {
    Card,
    TextInput,
    Wysiwyg,
    TextArea,
    PageContent,
    DatePicker,
    Checkbox,
    Dropzone,
    ImageUpload,
    Multiselect,
    CardLocaleSwitcher
} from "craftable-pro/Components";
import { InertiaForm } from "craftable-pro/types";
import type { ClubPageForm } from "./types";



interface Props {
  form: InertiaForm<ClubPageForm>;
  submit: void;
  
}

const props = defineProps<Props>();

</script>
