<template>
  <PageContent>
    <div class="w-7/8">
      <Card>
        <div class="grid grid-cols-2 gap-4">
          <div>
            <TextInput
                v-model="form.title"
                name="title"
                :label="$t('craftable-pro', 'Title')"
                
            /> 
            <TextInput
                v-model="form.slug"
                name="slug"
                :label="$t('craftable-pro', 'Slug')"
                
            />
            <TextArea
                v-model="form.content"
                name="content"
                :label="$t('craftable-pro', 'Content')"
            />
            
          </div>
          <div>

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
            />
          </div>
        </div>
      </Card>
    </div>
  </PageContent>
</template>

<script setup lang="ts">
import { ref,computed } from "vue"
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
import { values } from "lodash";
import { useUser } from "../../../../../vendor/brackets/craftable-pro/resources/js/hooks/useUser";

const { user } = useUser();
interface Props {
  
  form: InertiaForm<EventForm>;
  submit: void;
  categoryOptions: Array<{value: string|number, label: string}>;
clubOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();
</script>
