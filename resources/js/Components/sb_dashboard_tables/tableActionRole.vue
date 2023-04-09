<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
const props=defineProps(['tbdevelopers']);
const role=ref('');
</script>

<template>
    <!-- component -->
<div class="mt-9  overflow-hidden ml-5 mr-5">
  <table class="  table-auto w-full">
    <thead>
      <tr class="bg-gradient-to-r bg-gray-600">
        <th class="px-16 py-2">
          <span class="text-gray-100 font-semibold">Name</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-gray-100 font-semibold">Email</span>
        </th>

        <th class="px-16 py-2">
          <span class="text-gray-100 font-semibold">Role</span>
        </th>

        <th class="px-16 py-2">
          <span class="text-gray-100 font-semibold">Date</span>
        </th>

        <th class="px-16 py-2">
          <span class="text-gray-100 font-semibold">Edit</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-gray-100 font-semibold"></span>
        </th>
      </tr>
    </thead>
    <tbody class="bg-gray-200">
      <tr
      v-for="tbdevelopr in tbdevelopers"
      :key="tbdevelopr.id"
      class="bg-white border-b-2 border-gray-200"
      >
        <td>
          <span class="text-center ml-2 font-semibold">{{ tbdevelopr.name }}</span>
        </td>

        <td class="mx-2 py-2">
          <span>{{ tbdevelopr.email }}</span>
        </td>
        <td class="px-8 py-2">
          <span>{{ tbdevelopr.type }}</span>
        </td>
        <td class="px-16 py-2">
          <span>{{ tbdevelopr.updated_at }}</span>
        </td>

        <td class=" py-2 items-center">
        <form @submit.prevent="submit">
           <input
           type=hidden
           id="idUser"
           :value="tbdevelopr.id"/>
            <select name="role" id="role" v-model="role">
                <option>User</option>
                <option>Developer</option>
                <option>Admin</option>
                <option>Block</option>
            </select>
        </form>
        </td>
        <td class="px-16 py-2">
       <!-- component -->
       <Link
       :href="route('updateRole',tbdevelopr.id)"

        class="py-2 px-4 bg-transparent text-red-600 font-semibold border border-red-600 rounded hover:bg-red-600 hover:text-red hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0"
      >Apply</Link>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</template>
