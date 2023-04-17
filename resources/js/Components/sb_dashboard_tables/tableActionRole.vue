<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
const props=defineProps(['tbdevelopers']);
 
const formDataEdit = ref({
  type: '',
 
});
const showModal = ref(false);

const fetchCsrfToken = async () => {
  try {
    const response = await axios.get('/csrf-token');
    csrfToken.value = response.data.csrfToken;
  } catch (error) {
   }
};

// UPDATE FUNCTION
function editRole(data) {
  showModal.value = true;
  formDataEdit.value = { ...data };
}


const saveChanges = async () => {
  try {
    const id=formDataEdit.value.id;
    const response = await axios.put(`/updateRole/${id}`,formDataEdit.value);
    // Handle successful response
    console.log(response.data);
  } catch (error) {
    // Handle error response
  console.log("error RRR")
 console.error(error);
  }
    showModal.value = false;
};

</script>
<template>



    <!-- start edit software -->
    <!-- updating modal -->
    <div class=" rounded-lg">
    <button @click="showModal = true">Edit</button>
     <div v-if="showModal" class="modal-test  fixed mx-20 my-3 overflow-y-auto py-18 inset-2 z-50 flex items-center justify-center">
      <div class="modal-content bg-white  p-8 rounded-lg shadow-lg">
        <h2 class="pt-20">Edit Form Data</h2>
        <form>
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
      
            <select name="role" id="role"              
             v-model="formDataEdit.type"> 
                <option>user</option>
                <option>Developer</option>
                <option>admin</option>
                <option>Block</option>
            </select>
  
      </div>


        <div class="mt-6 flex items-center justify-end gap-x-6 mr-40 ">
          <button @click.prevent="showModal = false"
                class="text-sm font-semibold leading-6     text-gray-900"
                data-modal-hide="authentication-modal">
              <span class="sr-only">Close modal</span>  Cancel
        </button>

          <button @click.prevent="saveChanges()"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >Save
              </button>

        </div>

        </form>
      </div>
    </div>
   </div>

<!-- end edit software -->





    <!-- component -->
<div class="mt-9  overflow-hidden ml-5 mr-5">
  <table class="  table-auto w-full">
    <thead>
      <tr class="bg-gradient-to-r bg-gray-200 text-gray-600  uppercase text-sm leading-normal h-14">
        <th class="px-16 py-2">
          <span class=" font-semibold">Name</span>
        </th>
        <th class="px-16 py-2">
          <span class=" font-semibold">Email</span>
        </th>

        <th class="px-16 py-2">
          <span class=" font-semibold">Role</span>
        </th>

        <th class="px-16 py-2">
          <span class=" font-semibold">Date</span>
        </th>

        <th class="px-16 py-2">
          <span class=" font-semibold">Edit</span>
        </th>
        <th class="px-16 py-2">
          <span class=" font-semibold"></span>
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
        <td class="px-8 py-2">
          <span>{{ tbdevelopr.updated_at }}</span>
        </td>

        <td class=" py-2 items-center">
          <button
          class="py-2 px-4 bg-transparent text-red-600 font-semibold border border-red-600 rounded hover:bg-red-600 hover:text-red hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0"

          @click="editRole(tbdevelopr)">
          Manage role
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</template>
