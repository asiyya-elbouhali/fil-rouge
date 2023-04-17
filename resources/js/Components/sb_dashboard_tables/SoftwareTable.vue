<script setup>
// to add software
import { ref, onMounted,reactive } from 'vue';
import axios from 'axios';
const props = defineProps(['software']);
const csrfToken = ref('');
const formData = ref({
  name: '',
  version: '',
  add_date: '',
  compatibility: '',
  developer: '',
  image: null,
  description: '',
  url: '',
  icon: null,
});

const formDataEdit = ref({
  name: '',
  version: '',
  add_date: '',
  compatibility: '',
  developer: '',
  image: null,
  description: '',
  url: '',
  icon: null,
});
const showModal = ref(false);
const showModalCreate = ref(true);

function onImageChange(event) {
  formDataEdit.value.image = event.target.files[0];
}

function onIconChange(event) {
  formDataEdit.value.icon = event.target.files[0];
}

// function saveChanges() {
//   // Send formDataEdit to server or save to local storage
//   showModal.value = false;
// }

const fetchCsrfToken = async () => {
  try {
    const response = await axios.get('/csrf-token');
    csrfToken.value = response.data.csrfToken;
    const softwareResponse = await axios.get('/softwares');
    softwareList = reactive(softwareResponse.data);
    console.log(softwareList)
    // console.log(csrfToken.value)
  } catch (error) {
    // console.error(error);
  }
};

// addSoftware
const submitForm = async () => {
  try {
    const data = new FormData();
    data.append('name', formData.value.name);
    data.append('version', formData.value.version);
    // data.append('add_date', formData.value.add_date);
    data.append('compatibility', formData.value.compatibility);
    data.append('developer', formData.value.developer);
    data.append('description', formData.value.description);
    const response = await axios.post('/addsoftwares',data, {
      headers: {
        // 'Content-Type': 'multipart/form-data',
        'X-CSRF-TOKEN': csrfToken.value,
      },
    });
    // Handle successful response
    console.log("ok")
    console.log(response.data)
     const  button = document.getElementById('closeModel');
            button.click();
  } catch (error) {
    // Handle error response
  console.log("error")
 console.error(error.response.data);
  }
};
onMounted(fetchCsrfToken);


const deleteSoftware = async (id) => {
  try {
    const response = await axios.delete(`/software/${id}`);
    console.log(response.data)
  } catch (error) {
    console.error(error);
  }
};

// UPDATE FUNCTION
function editSoftware(data) {
  showModal.value = true;
  formDataEdit.value = { ...data };
}


const saveChanges = async () => {
  try {
    const id=formDataEdit.value.id;
    const response = await axios.put(`/softwares/${id}`,formDataEdit.value);
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
    <!-- <h1>{{ software[0].name }}</h1> -->


    <!-- start edit software -->
    <!-- updating modal -->
<div class=" rounded-lg">
    <button @click="showModal = true">Edit</button>
     <div v-if="showModal" 
     class="modal-test  fixed mx-20 my-3 overflow-y-auto py-18 inset-2 z-50 flex items-center justify-center">
      <div class="modal-content bg-white  p-8 rounded-lg shadow-lg">
        <h2 class="pt-20">Edit Form Data</h2>
        <form>
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">

          <div class="sm:col-span-3">
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="text" name="name" id="name" autocomplete="name"
              v-model="formDataEdit.name"
              class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>


             <div class="sm:col-span-3">
            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Version</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="text"
               v-model="formDataEdit.version"
              name="version" id="version" autocomplete="version" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>



        <div class="sm:col-span-3">
            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Compatibility</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="text"
               v-model="formDataEdit.compatibility"
              name="compatibility" id="compatibility" autocomplete="compatibility" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>



        <div class="sm:col-span-3">
            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Developer</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="text"
               v-model="formDataEdit.developer"
              name="developer" id="developer" autocomplete="developer" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>



        <div class="sm:col-span-3">
            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Image:</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="file" @change="onImageChange"
              name="developer" id="developer" autocomplete="developer" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>



        <div class="sm:col-span-3">
            <label for="url" class="block text-sm font-medium leading-6 text-gray-900">URL</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="text"
               v-model="formDataEdit.url"
              name="url" id="url" autocomplete="url" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>


        <div class="sm:col-span-3">
            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Icon:</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input
              @change="onIconChange"
              type="file" name="image" id="image" autocomplete="image" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>

        <div class="col-span-3">
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
          <div class="mt-2">
            <textarea id="description"
             v-model="formDataEdit.description"
            name="description" rows="3" class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"/>
          </div>
          <!-- <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p> -->
        </div>



      </div>


        <div class="mt-6 flex items-center justify-end gap-x-6 mr-40 ">
          <button @click.prevent="showModal = false"
                class="text-sm font-semibold leading-6     text-gray-900"
                 >
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

    <div class="overflow-x-auto">
        <div
            class="min-w-screen min-h-screen bg-white flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-6/6 mx-5">
                <div class="bg-white shadow-md rounded my-6">
                    <div class=" float-right">
                    <button
                    @click="showModalCreate = true"

                    type="button"
                    class="text-white bg-gradient-to-r from-blue-500
                     via-blue-600 to-blue-700 hover:bg-gradient-to-br
                     focus:ring-4 focus:outline-none focus:ring-blue-300
                      dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50
                      dark:shadow-lg dark:shadow-blue-800/80 font-medium
                      rounded-lg text-sm px-3 py-2.5 text-center mr-2 mb-2 "
                    >
                    <span class="flex items-center">
                        <span>Add New</span>
                        <svg fill="white" height="20" width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                            <path d="M256,11C120.9,11,11,120.9,11,256s109.9,245,245,245s245-109.9,245-245S391.1,11,256,11z M256,460.2    c-112.6,0-204.2-91.6-204.2-204.2S143.4,51.8,256,51.8S460.2,143.4,460.2,256S368.6,460.2,256,460.2z"/>
                            <path d="m357.6,235.6h-81.2v-81.2c0-11.3-9.1-20.4-20.4-20.4-11.3,0-20.4,9.1-20.4,20.4v81.2h-81.2c-11.3,0-20.4,9.1-20.4,20.4s9.1,20.4 20.4,20.4h81.2v81.2c0,11.3 9.1,20.4 20.4,20.4 11.3,0 20.4-9.1 20.4-20.4v-81.2h81.2c11.3,0 20.4-9.1 20.4-20.4s-9.1-20.4-20.4-20.4z"/>
                            </g>
                        </svg>
                    </span>
                    </button>
                </div>




                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Software</th>
                                <th class="py-3 px-6 text-left">Developer</th>
                                <th class="py-3 px-6 text-center">Version</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Add Date</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-600 text-sm font-light">
                            <tr
                            v-for="soft in software" :key="soft.id"

                            class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">

                                    <div class="flex items-center">
                                        <div class="mr-2">

                                 <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                             viewBox="0 0 48 48" style=" fill:#000000;">
                                                <path fill="#80deea"
                                                    d="M24,34C11.1,34,1,29.6,1,24c0-5.6,10.1-10,23-10c12.9,0,23,4.4,23,10C47,29.6,36.9,34,24,34z M24,16	c-12.6,0-21,4.1-21,8c0,3.9,8.4,8,21,8s21-4.1,21-8C45,20.1,36.6,16,24,16z">
                                                </path>
                                                <path fill="#80deea"
                                                    d="M15.1,44.6c-1,0-1.8-0.2-2.6-0.7C7.6,41.1,8.9,30.2,15.3,19l0,0c3-5.2,6.7-9.6,10.3-12.4c3.9-3,7.4-3.9,9.8-2.5	c2.5,1.4,3.4,4.9,2.8,9.8c-0.6,4.6-2.6,10-5.6,15.2c-3,5.2-6.7,9.6-10.3,12.4C19.7,43.5,17.2,44.6,15.1,44.6z M32.9,5.4	c-1.6,0-3.7,0.9-6,2.7c-3.4,2.7-6.9,6.9-9.8,11.9l0,0c-6.3,10.9-6.9,20.3-3.6,22.2c1.7,1,4.5,0.1,7.6-2.3c3.4-2.7,6.9-6.9,9.8-11.9	c2.9-5,4.8-10.1,5.4-14.4c0.5-4-0.1-6.8-1.8-7.8C34,5.6,33.5,5.4,32.9,5.4z">
                                                </path>
                                                <path fill="#80deea"
                                                    d="M33,44.6c-5,0-12.2-6.1-17.6-15.6C8.9,17.8,7.6,6.9,12.5,4.1l0,0C17.4,1.3,26.2,7.8,32.7,19	c3,5.2,5,10.6,5.6,15.2c0.7,4.9-0.3,8.3-2.8,9.8C34.7,44.4,33.9,44.6,33,44.6z M13.5,5.8c-3.3,1.9-2.7,11.3,3.6,22.2	c6.3,10.9,14.1,16.1,17.4,14.2c1.7-1,2.3-3.8,1.8-7.8c-0.6-4.3-2.5-9.4-5.4-14.4C24.6,9.1,16.8,3.9,13.5,5.8L13.5,5.8z">
                                                </path>
                                                <circle cx="24" cy="24" r="4" fill="#80deea"></circle>
                                            </svg>
                                        </div>
                                        <span class="font-medium">{{soft.name}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                                                            <button
                                          @click="editSoftware(soft)"
                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </button>
                                    <!-- <div class="flex items-center">
                                        <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full"
                                                src="https://randomuser.me/api/portraits/men/1.jpg" />
                                        </div>
                                        <span>{{soft.developer}}</span>
                                    </div> -->
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span>{{soft.version}}</span>

                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">
                                        {{soft.created_at}}
                                    </span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div
                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>

                                        <button

                                       
                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </button>

                                        <button
                                        @click="deleteSoftware(soft.id)"
                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>


                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<div id="popup-modal" tabindex="-1" >
</div>

<!-- add software form -->

 <div v-if="showModalCreate" 
 class="fixed top-0 modal-test left-0 right-0  inset-2  z-50  items-center justify-center hidden w-screen p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class=" modal-content relative w-screen px-20 max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <button 
            @click="showModalCreate = true"
            type="button" 
            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
            >
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white justify-center flex">Add New Software</h3>




                <form @submit.prevent="submitForm"  class="w-[100%] ">
            <input type="hidden" name="_token" :value="csrfToken">

                    <div class="space-y-12 mx-40 my-10">
    <div class=" border-gray-900/10 pb-12">
      <!-- <h2 class="text-base font-semibold leading-7 text-gray-900">Add Softawre</h2> -->
      <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>





      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="text" name="name" id="name" autocomplete="name"
              v-model="formData.name"
              class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>

        <div class="sm:col-span-3">
            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Version</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="text"
               v-model="formData.version"
              name="version" id="version" autocomplete="version" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>



        <div class="sm:col-span-3">
            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Compatibility</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="text"
               v-model="formData.compatibility"
              name="compatibility" id="compatibility" autocomplete="compatibility" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>


        <div class="sm:col-span-3">
            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Developer</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="text"
               v-model="formData.developer"
              name="developer" id="developer" autocomplete="developer" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>




        <div class="sm:col-span-3">
            <label for="url" class="block text-sm font-medium leading-6 text-gray-900">URL</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="file"
              @change="handleImageChange"
              name="url" id="url" autocomplete="url" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>

        <div class="sm:col-span-3">
            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

              <input type="file" name="image" id="image" autocomplete="image" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder=""/>
            </div>
          </div>
        </div>




      </div>




      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <div class="col-span-full">
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
          <div class="mt-2">
            <textarea id="description"
             v-model="formData.description"
            name="description" rows="3" class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"/>
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
        </div>

        <div class="col-span-full">
          <label for="icon" class="block text-sm font-medium leading-6 text-gray-900">Icon</label>
          <div class="mt-2 flex items-center gap-x-3">
            <UserCircleIcon class="h-12 w-12 text-gray-300" aria-hidden="true" />
            <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
          </div>
        </div>

        <div class="col-span-full">
          <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover image</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <PhotoIcon class="mx-auto h-12 w-12 text-gray-300" aria-hidden="true" />
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="file-upload"

                  name="file-upload" type="file" class="sr-only" />
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="border-b border-gray-900/10 pb-12">



      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="trial" class="block text-sm font-medium leading-6 text-gray-900"> Trial Duration </label>
          <div class="mt-2">
            <input type="number" name="freeTrail" id="freeTrail" autocomplete="freeTrail" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
          </div>
        </div>

        <!-- <div class="sm:col-span-3">
          <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Pricing</label>
          <div class="mt-2">
            <input type="number" min="0" name="price" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
          </div>
        </div> -->


      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6 mr-40 ">
    <button
    @click="showModalCreate = false" 
    type="button" class="text-sm font-semibold leading-6 text-gray-900"
     >
    <span class="sr-only">Close modal</span>
Cancel</button>
    <button type="submit"
    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
    >Save</button>
  </div>
                </form>
            </div>
        </div>
    </div>
</div>









</template>
