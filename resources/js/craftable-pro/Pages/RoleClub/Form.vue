<template>
  <PageContent>
    <div class="mx-auto max-w-3xl 2xl:max-w-4xl">
      

      <Card>
        <div class="space-y-4">
            <Multiselect
                v-model="form.info_users_id"
                name="info_users_id"
                :label="$t('craftable-pro', 'InfoUser')"
                :options="infoUserOptions"
                mode="single"
            /> 

            <Multiselect
                v-model="form.club_id"
                name="club_id"
                :label="$t('craftable-pro', 'Club')"
                :options="clubOptions"
                mode="single"
            /> 

            <Multiselect
                v-model="form.sub_role_id"
                name="sub_role_id"
                :label="$t('craftable-pro', 'SubRole')"
                :options="subRoleOptions"
                mode="single"
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
import type { RoleClubForm } from "./types";



interface Props {
  form: InertiaForm<RoleClubForm>;
  submit: void;
  infoUserOptions: Array<{value: string|number, label: string}>;
clubOptions: Array<{value: string|number, label: string}>;
subRoleOptions: Array<{value: string|number, label: string}>
}

const props = defineProps<Props>();

</script>
