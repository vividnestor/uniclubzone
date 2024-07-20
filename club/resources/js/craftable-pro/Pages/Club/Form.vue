<template>
  <PageContent>
    <div class="mx-auto max-w-3xl 2xl:max-w-4xl">
      

      <Card>
        <div class="space-y-4">
            <TextInput
                v-model="form.name"
                name="name"
                :label="$t('craftable-pro', 'Name')"
                
            /> 

            <TextInput
                v-model="form.description"
                name="description"
                :label="$t('craftable-pro', 'Description')"
                
            /> 

            <Checkbox
                v-model="form.active"
                name="active"
                :label="$t('craftable-pro', 'Active')"
            /> 

            <Checkbox
                v-model="form.delete_flag"
                name="delete_flag"
                :label="$t('craftable-pro', 'Delete Flag')"
            /> 

            <DatePicker
                v-model="form.published_at"
                name="published_at"
                mode="dateTime"
                :label="$t('craftable-pro', 'Published At')"
                
            /> 

            <Multiselect
                v-model="form.craftable_pro_users_id"
                name="craftable_pro_users_id"
                :label="$t('craftable-pro', 'CraftableProUser')"
                :options="craftableProUserOptions"
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
import type { ClubForm } from "./types";



interface Props {
  form: InertiaForm<ClubForm>;
  submit: void;
  craftableProUserOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();

</script>
