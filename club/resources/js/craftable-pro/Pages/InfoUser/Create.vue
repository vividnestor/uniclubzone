<template>
  <div v-for="infoUser in infoUsers">
    <div v-if="infoUser.craftable_pro_users_id==user.id">
      <div class=" absolute z-10 w-full h-full bg-white">
        <h1 class=" text-3xl font-bold text-center mt-44 mb-10">You Completed Information !!</h1>
        <div class=" w-full flex items-center justify-center">
          <a class=" text-center" style="background-color:darkorange;border-radius: 20px;padding:8px;color:white" 
              :href="route('craftable-pro.info-users.edit',infoUser.id)">
              Update Your Info
          </a>
        </div>
      </div>
    </div>
  </div>
  <PageHeader  class=" relative" :title="$t('craftable-pro', 'Create Info User')">
    <Button style="background-color:darkorange;border-radius: 20px;padding:10px;color:white"
      :leftIcon="ArrowDownTrayIcon"
      @click="submit"
      :loading="form.processing"
      v-can="'craftable-pro.info-user.create'"
    >
      {{ $t("craftable-pro", "Save") }}
    </Button>
  </PageHeader>

  <Form :form="form" :submit="submit" />
</template>

<script setup lang="ts">
import { ArrowDownTrayIcon } from "@heroicons/vue/24/outline";
import { PageHeader, Button } from "craftable-pro/Components";
import { useForm } from "craftable-pro/hooks/useForm";
import Form from "./Form.vue";
import type { InfoUserForm } from "./types";
import { useUser } from "craftable-pro/hooks/useUser";
import { ref } from "vue";
import { PaginatedCollection } from "craftable-pro/types/pagination";
import type {  Info} from "craftable-pro/types/models";

const { user } = useUser();

interface Props {}

const props = defineProps<Props>();
  interface Props {
  infoUsers:PaginatedCollection<Info>
}
// const Users=[];
// props.infoUsers.forEach(userstatus => {
//   Users.push(userstatus.craftable_pro_users_id);
// });
// console.log(Users)

const userId = ref<string>(""); // Using a ref for flexibility

const { form, submit } = useForm<InfoUserForm>({
  gender: "",
  department: "",
  year: "",
  phone: "",
  craftable_pro_users_id: user.value.id?.toString()
}, route("craftable-pro.info-users.store"), "post");
</script>