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

            <Multiselect
                v-model="form.club_id"
                name="club_id"
                :label="$t('craftable-pro', 'Club')"
                :options="clubOptions"
                mode="single"
            /> 

            <Multiselect
                v-model="form.category_id"
                name="category_id"
                :label="$t('craftable-pro', 'Category')"
                :options="categoryOptions"
                mode="single"
            /> 

            <Dropzone
                v-model="form.image"
                name="image"
                :maxFileSize="10485760"
                :label="$t('craftable-pro', 'Image')"
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
import type { EventForm } from "./types";



interface Props {
  form: InertiaForm<EventForm>;
  submit: void;
  categoryOptions: Array<{value: string|number, label: string}>;
clubOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();

</script>
