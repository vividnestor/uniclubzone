<template>
  <PageContent>
    <div class="mx-auto max-w-3xl 2xl:max-w-4xl">
      

      <Card>
        <div class="space-y-4">
            <TextInput
                v-model="form.gender"
                name="gender"
                :label="$t('craftable-pro', 'Gender')"
                
            /> 

            <TextInput
                v-model="form.department"
                name="department"
                :label="$t('craftable-pro', 'Department')"
                
            /> 

            <TextInput
                v-model="form.year"
                name="year"
                :label="$t('craftable-pro', 'Year')"
                
            /> 

            <TextInput
                v-model="form.phone"
                name="phone"
                :label="$t('craftable-pro', 'Phone')"
                
            /> 

            <TextInput
                class=" hidden"
                v-model="form.craftable_pro_users_id"
                name="craftable_pro_users_id"
                :label="$t('craftable-pro', 'Craftable Pro Users Id')"
                
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
import type { InfoUserForm } from "./types";
import { useUser } from "craftable-pro/hooks/useUser";
import { values } from "lodash";
const {user}=useUser();

interface Props {
  form: InertiaForm<InfoUserForm>;
  submit: void;
  
}


const props = defineProps<Props>();

</script>
