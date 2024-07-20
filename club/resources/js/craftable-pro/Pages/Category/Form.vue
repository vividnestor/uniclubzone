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
import type { CategoryForm } from "./types";



interface Props {
  form: InertiaForm<CategoryForm>;
  submit: void;
  
}

const props = defineProps<Props>();

</script>
