<script setup>
// to add software
import { ref, onMounted,reactive, computed } from 'vue';
import axios from 'axios';
const props = defineProps(['details','AllBusinessCategories']);
const csrfToken = ref('');
const formData = ref({
  order_date: '',
  automatically_renew: '',
  price: '',
  number_of_device: '',
  total_before_tax: '',
  total_after_tax: '',
  next_due_date: '',
  web_hosting: '',
  demon_version: '',
  business_categories_id: '',
  user_id: '',
  software_id: '',
  order_status_id: '',
  server_id: '',


});


const fetchCsrfToken = async () => {
  try {
    const response = await axios.get('/csrf-token');
    csrfToken.value = response.data.csrfToken;
    // console.log(csrfToken.value)
  } catch (error) {
    // console.error(error);
  }
};

const submitForm = async () => {
  try {
    const data = new FormData();
    data.append('order_date', formData.value.order_date);
    // data.append('automatically_renew', formData.value.automatically_renew);
    data.append('automatically_renew', isActive ? 1 : 0);

    data.append('price', formData.value.price);
    data.append('number_of_device', formData.value.number_of_device);
    data.append('total_before_tax', formData.value.total_before_tax);
    data.append('next_due_date', formData.value.next_due_date);
    // data.append('web_hosting', formData.value.web_hosting);
    data.append('web_hosting', WBActive ? 1 : 0);

    // data.append('demon_version', formData.value.demon_version);
    formData.append('demon_version', DemoActive ? 1 : 0);
    data.append('business_categories_id', formData.value.business_categories_id);
    data.append('user_id', formData.value.user_id);
    data.append('software_id', formData.value.software_id);
    data.append('order_status_id', formData.value.order_status_id);
    data.append('server_id', formData.value.server_id);


    const response = await axios.post('/addOrder',data, {
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


const deleteOrder = async (id) => {
  try {
    const response = await axios.delete(`/order/${id}`);

    console.log(response.data)

  } catch (error) {
    console.error(error);
  }
};


</script>
<script>
export default {
  data() {
    return {
      isActive: false,
      DemoActive : false,
      WBActive : false
    }
  },
  computed: {
    inputValue() {
      return this.isActive ? 1 : 0;
    },

    inputDemoValue() {
      return this.DemoActive ? 1 : 0;
    },
    inputWHValue() {
      return this.WBActive ? 1 : 0;
    }
  }
}
</script>
<template>
  <!-- <h2 v-if="details">2</h2> -->
  <!-- {{ details }} -->
  <div class=" bg-blue-200 ">
  </div>
  <!-- component -->
  <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

    <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
      <img class="w-full" alt="image of a girl posing"
        src="https://www.iris.ma/44421/kaspersky-anti-virus-2020-3-postes-1-ankl11718bcfs-20ffpmag.jpg" />
      <img class="mt-6 w-full" alt="image of a girl posing"
        src="https://5.imimg.com/data5/SELLER/Default/2021/12/TK/QQ/BA/48454907/kasperskypro-1-copy-1000x1000.png" />
    </div>



    <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">


      <form
      @submit.prevent="submitForm"
      >
      <div class="border-b border-gray-200 pb-6">
        <p class="text-sm leading-none text-gray-600 dark:text-gray-300 ">{{ details.name }}</p>
        <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2">
          {{ details.name }} Pack</h1>
          <input type="text" hidden :value=" details.name">

      </div>
      <div class="py-4 border-b border-gray-200 flex items-center justify-between">
        <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Version</p>

        <div class="flex items-center justify-center">
          <p class="text-sm leading-none text-gray-600 dark:text-gray-300">{{ details.version }}</p>
          <input type="text" hidden :value=" details.version">
          <div class="w-6 h-6 bg-gradient-to-b from-gray-900 to-indigo-500 ml-3 mr-4 cursor-pointer"></div>
          <svg class="cursor-pointer text-gray-300 dark:text-white" width="6" height="10" viewBox="0 0 6 10" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L5 5L1 9" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </div>
      </div>

      <div class="py-4 border-b border-gray-200 flex items-center justify-between">
        <!-- start  Button Number of device  -->

        <!-- <div class="flex justify-center">
            <div> -->
              <!-- <div class="relative " data-te-dropdown-ref> -->
                  <!-- <select name="" id="" class="flex items-center border w-44  border-gray-700 whitespace-nowrap rounded  bg-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-black  shadow-[0_4px_4px_-4px_#3b71ca]  transition duration-150 ease-in-out hover:bg-primary-600     focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none"
                  type="">
             <option value="">1 Device/1 Year</option>
             <option value="">2 Device / 1 Year</option>
             <option value="">3 Device / 2 Year</option>

            </select> -->
              <!-- </div> -->
            <!-- </div>
          </div> -->


          <div class="sm:col-span-3">
          <!-- <label for="trial" class="block text-sm font-medium leading-6 text-gray-900"> Business Category  </label> -->
          <div class="mt-2">
            <select 
            v-model="formData.business_categories_id" 
            name="business_categories_id" 
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            required>
            <option value=""  >Small Business</option>

        <option v-for="BCateg in BusinessCategories" :value="BCateg.id">{{ BCateg.name }}</option>
      </select>
          </div>
        </div>
        <!-- end  Button Number of device  -->



        <div class="flex items-center justify-center">

          <!-- start  Button Business Category  -->

          <!-- <div class="flex justify-center">
            <div>
              <div class="relative " data-te-dropdown-ref>
                  <select name="" id="" class="flex items-center border w-44  border-gray-700 whitespace-nowrap rounded  bg-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-black  shadow-[0_4px_4px_-4px_#3b71ca]  transition duration-150 ease-in-out hover:bg-primary-600     focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none"
                  type="">
             <option value="">Small Business</option>
             <option value="">Medium Business</option>
             <option value=""> Entreprise</option>

            </select>
              </div>
            </div>
          </div> -->

          
        <div class="sm:col-span-3">
          <!-- <label for="trial" class="block text-sm font-medium leading-6 text-gray-900"> Business Category  </label> -->
          <div class="mt-2">
            <select 
            v-model="formData.business_categories_id" 
            name="business_categories_id" 
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            required>
            <option value="">Small Business</option>

        <option v-for="BCateg in AllBusinessCategories" :value="BCateg.id">{{ BCateg.name }}</option>
      </select>
          </div>
        </div>
          <!-- end  Button Business Category  -->

        </div>
      </div>

      <!-- start Renew -->
      <div class="py-4 border-b border-gray-200 flex items-center justify-between">
        <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Renewal</p>

        <div class="flex items-center justify-center">




          <label for="toggleThree" class="flex cursor-pointer select-none items-center">
    <div class="relative">
      <input type="checkbox"  id="toggleThree" class="sr-only" v-model="isActive" />
      <div class="block h-8 w-14 rounded-full bg-[#E5E7EB]"></div>
      <div class="dot absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full  transition">
        <span :class="{ active: isActive, hidden: !isActive } ">
          <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z" fill="blue" stroke="blue" stroke-width="2"></path>
          </svg>
        </span>
        <span :class="{ inactive: !isActive, hidden: isActive }">
          <svg class="h-4 w-4 stroke-current" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </span>
      </div>
    </div>
  </label>
    <!-- this hidden input that handels the boolean value (0/1) onClick the toggel to choose a renew licence or not -->
  <input name="Renew" type="hidden" :value="inputValue">





        </div>
      </div>


      <!-- Demo Version -->
      <div class="py-4 border-b border-gray-200 flex items-center justify-between">
        <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Demo Version</p>

        <div class="flex items-center justify-center">




          <label for="DemoToggleThree" class="flex cursor-pointer select-none items-center">
    <div class="relative">
      <input type="checkbox" id="DemoToggleThree" class="sr-only" v-model="DemoActive" />
      <div class="block h-8 w-14 rounded-full bg-[#E5E7EB]"></div>
      <div class="dot absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full  transition">
        <span :class="{ active: DemoActive, hidden: !DemoActive } ">
          <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z" fill="blue" stroke="blue" stroke-width="2"></path>
          </svg>
        </span>
        <span :class="{ inactive: !DemoActive, hidden: DemoActive }">
          <svg class="h-4 w-4 stroke-current" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </span>
      </div>
    </div>
  </label>
    <!-- this hidden input that handels the boolean value (0/1) onClick the toggel to choose a DemoVersion of the software or not -->
    <input name="DemoVersion" type="hidden" :value="inputDemoValue">





        </div>
      </div>


      <!-- Web Hosting -->
        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
        <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Web Hosting</p>

        <div class="flex items-center justify-center">

          <label for="WBToggleThree" class="flex cursor-pointer select-none items-center">
    <div class="relative">
      <input type="checkbox" id="WBToggleThree" class="sr-only" v-model="WBActive" />
      <div class="block h-8 w-14 rounded-full bg-[#E5E7EB]"></div>
      <div class="dot absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full  transition">
        <span :class="{ active: WBActive, hidden: !WBActive } ">
          <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z" fill="blue" stroke="blue" stroke-width="2"></path>
          </svg>
        </span>
        <span :class="{ inactive: !WBActive, hidden: WBActive }">
          <svg class="h-4 w-4 stroke-current" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </span>
      </div>
    </div>
  </label>
    <!-- this hidden input that handels the boolean value (0/1) onClick the toggel to choose WebHosting or not -->
    <input name="WebHosting" type="hidden" :value="inputWHValue">





        </div>
      </div>




      <div class="flex justify-between my-9 items-center w-full">
            <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
            <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">$36.00</p>
          </div>


      <button 
        class="dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700 focus:outline-none" 
        >
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" class="mr-3" width="30" height="20" version="1.1"
          shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"
          fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 434.91" xmlns:xlink="http://www.w3.org/1999/xlink"
          xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
          <g id="Layer_x0020_1">
            <metadata id="CorelCorpID_0Corel-Layer" />
            <path fill="gray" fill-rule="nonzero"
              d="M15.31 43.96c-8.25,0 -15.31,-7.06 -15.31,-15.7 0,-8.24 7.06,-15.3 15.31,-15.3l21.19 0c0.39,0 1.18,0 1.57,0 14.13,0.39 26.69,3.14 37.29,9.8 20.54,13.02 24.19,31.61 29.44,52.6l170.15 0c-2.03,9.26 -3.1,18.87 -3.1,28.74l0.01 1.88 -158.43 0 34.94 131.49 247.67 0 0.06 -0.22c3.04,0.21 6.11,0.32 9.21,0.32 7.72,0 15.29,-0.66 22.65,-1.92l-5.23 21.06c-1.57,7.06 -7.85,11.77 -14.91,11.77l-251.21 0c5.49,20.41 10.99,31.4 18.45,36.51 9.02,5.88 24.73,6.27 51.02,5.88l0.4 0 177.41 0c8.64,0 15.31,7.07 15.31,15.31 0,8.64 -7.07,15.31 -15.31,15.31l-177.41 0c-32.58,0.39 -52.6,-0.4 -68.7,-10.99 -16.48,-10.99 -25.11,-29.83 -33.75,-63.98l-52.6 -199.01c0,-0.39 0,-0.39 -0.39,-0.78 -2.35,-8.64 -6.28,-14.52 -11.77,-17.66 -5.5,-3.54 -12.96,-5.11 -21.59,-5.11 -0.4,0 -0.79,0 -1.18,0l-21.19 0zm228.96 96.91c0,-4.84 4.78,-8.76 10.67,-8.76 5.9,0 10.68,3.92 10.68,8.76l0 59.2c0,4.84 -4.78,8.76 -10.68,8.76 -5.89,0 -10.67,-3.92 -10.67,-8.76l0 -59.2zm-63.94 0c0,-4.84 4.78,-8.76 10.67,-8.76 5.9,0 10.68,3.92 10.68,8.76l0 59.2c0,4.84 -4.78,8.76 -10.68,8.76 -5.89,0 -10.67,-3.92 -10.67,-8.76l0 -59.2zm177.64 218.67c20.8,0 37.68,16.88 37.68,37.69 0,20.8 -16.88,37.68 -37.68,37.68 -20.8,0 -37.68,-16.88 -37.68,-37.68 0,-20.81 16.88,-37.69 37.68,-37.69zm-165.25 0c20.8,0 37.68,16.88 37.68,37.69 0,20.8 -16.88,37.68 -37.68,37.68 -20.8,0 -37.68,-16.88 -37.68,-37.68 0,-20.81 16.88,-37.69 37.68,-37.69z" />
            <path fill="#00A912" fill-rule="nonzero"
              d="M405.31 0c29.46,0 56.13,11.95 75.44,31.25 19.31,19.31 31.25,45.98 31.25,75.44 0,29.45 -11.94,56.13 -31.25,75.43 -19.31,19.31 -45.98,31.26 -75.44,31.26 -29.45,0 -56.13,-11.95 -75.44,-31.26 -19.3,-19.3 -31.25,-45.98 -31.25,-75.43 0,-29.46 11.95,-56.13 31.25,-75.44 19.31,-19.3 45.99,-31.25 75.44,-31.25z" />
            <path fill="white"
              d="M372.38 86.95l19.89 18.79 43.22 -43.86c3.9,-3.95 6.34,-7.13 11.14,-2.18l15.59 15.97c5.12,5.06 4.86,8.03 0.03,12.74l-61.08 60.03c-10.18,9.98 -8.41,10.59 -18.73,0.35l-36.3 -36.1c-2.15,-2.32 -1.92,-4.68 0.44,-7l18.09 -18.77c2.74,-2.88 4.92,-2.63 7.71,0.03z" />
          </g>
        </svg>
        Order Now
      </button>
      <div>
        <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-gray-600 dark:text-gray-300 mt-7">
        {{ details.description }}.</p>
        <!-- <p class="text-base leading-4 mt-7 text-gray-600 dark:text-gray-300">Product Code: 8BN321AF2IF0NYA</p> -->
        <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Compatibility: {{ details.compatibility }}
        </p>
        <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Developper: {{ details.developper }}</p>
        <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Add date: {{ details.add_date }}</p>
        <!-- <p class="md:w-96 text-base leading-normal text-gray-600 dark:text-gray-300 mt-4">Composition: 100% calf leather,
            inside: 100% lamb leather</p> -->
      </div>
      <div>
        <div class="border-t border-b py-4 mt-7 border-gray-200">
          <div data-menu class="flex justify-between items-center cursor-pointer">
            <p class="text-base leading-4 text-gray-800 dark:text-gray-300">


              <span>Guarantee</span>
              <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="60" height="40" version="1.1"
                shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 360 511.48"
                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                <g id="Layer_x0020_1">
                  <metadata id="CorelCorpID_0Corel-Layer" />
                  <polygon fill="#D0401B" points="144.83,306.61 296.28,280.53 360,429.51 281.2,428.61 216.45,481.14 " />
                  <polygon fill="#FF6600" points="231.94,290.08 69.57,294.38 0,459.86 78.8,458.95 143.55,511.48 " />
                  <path fill="#F5C800"
                    d="M183.21 0.03c9.35,-0.4 16.72,2.86 24.15,7.59 9.44,5.98 20.06,17.8 33.17,25.3 18.45,10.54 52.61,-4 70.11,21.99 10.21,15.16 10.69,27.04 11.45,38.78 0.82,12.67 3.04,24.32 16,41.47 21.47,28.38 25.94,47.27 14.88,66.96 -7.54,13.42 -23.41,20.88 -27.09,29.38 -7.81,18.09 0.83,31.72 -9.87,52.81 -7.43,14.62 -18.89,24.26 -34.16,29.18 -12.88,4.14 -25.8,-1.85 -36.1,2.48 -18.12,7.61 -31.48,25.3 -45.89,29.77 -5.57,1.73 -11.11,2.58 -16.65,2.54 -5.53,0.04 -11.08,-0.81 -16.64,-2.54 -14.42,-4.47 -27.78,-22.16 -45.9,-29.77 -10.3,-4.33 -23.22,1.66 -36.1,-2.48 -15.26,-4.92 -26.73,-14.56 -34.16,-29.18 -10.7,-21.09 -2.06,-34.72 -9.87,-52.81 -3.68,-8.5 -19.55,-15.96 -27.09,-29.38 -11.06,-19.69 -6.58,-38.58 14.88,-66.96 12.96,-17.15 15.18,-28.8 16,-41.47 0.76,-11.74 1.24,-23.62 11.45,-38.78 17.5,-25.99 51.66,-11.45 70.11,-21.99 13.12,-7.5 23.73,-19.32 33.17,-25.3 7.44,-4.73 14.81,-7.99 24.15,-7.59z" />
                  <path fill="#FFDD61"
                    d="M183.21 0.04c9.35,-0.41 16.71,2.86 24.15,7.58 9.44,5.98 20.06,17.8 33.17,25.3 14.67,8.38 39.28,0.91 57.54,10.56l-206.12 271.42c-2.45,-0.2 -4.92,-0.62 -7.38,-1.41 -15.27,-4.92 -26.73,-14.55 -34.16,-29.18 -10.7,-21.09 -2.06,-34.72 -9.87,-52.81 -3.68,-8.5 -19.55,-15.96 -27.09,-29.38 -11.06,-19.69 -6.58,-38.58 14.87,-66.96 12.97,-17.14 15.19,-28.8 16.01,-41.47 0.76,-11.74 1.24,-23.62 11.44,-38.78 17.51,-26 51.68,-11.45 70.12,-21.99 13.12,-7.5 23.74,-19.32 33.17,-25.3 7.44,-4.72 14.81,-7.99 24.15,-7.58z" />
                  <circle fill="#E37E00" cx="182.71" cy="176.83" r="130.04" />
                  <path fill="#F5C800"
                    d="M182.71 72.88c57.41,0 103.94,46.54 103.94,103.95 0,57.41 -46.53,103.95 -103.94,103.95 -57.41,0 -103.95,-46.54 -103.95,-103.95 0,-57.41 46.54,-103.95 103.95,-103.95z" />
                  <path fill="#FFDD61"
                    d="M182.71 72.88c27.48,0 52.49,10.67 71.07,28.09l-127.44 163.2c-4.62,-2.98 -8.99,-6.33 -13.07,-9.99 -21.18,-19.02 -34.51,-46.63 -34.51,-77.35 0,-57.41 46.54,-103.95 103.95,-103.95z" />
                  <path fill="#E37E00" fill-rule="nonzero"
                    d="M185.78 116.08l16.31 38.19 41.36 3.71c1.83,0.16 3.18,1.77 3.02,3.59 -0.07,0.89 -0.49,1.67 -1.12,2.21l0 0 -31.29 27.33 9.26 40.5c0.41,1.79 -0.71,3.57 -2.5,3.98 -0.92,0.21 -1.83,0.02 -2.56,-0.45l-35.55 -21.26 -35.66 21.32c-1.57,0.94 -3.61,0.43 -4.55,-1.14 -0.46,-0.77 -0.57,-1.64 -0.39,-2.45l0 0 9.26 -40.5 -31.3 -27.33c-1.38,-1.2 -1.52,-3.3 -0.31,-4.68 0.61,-0.7 1.46,-1.08 2.32,-1.13l41.26 -3.7 16.32 -38.21c0.72,-1.69 2.67,-2.47 4.35,-1.75 0.84,0.35 1.45,1 1.77,1.77l0 0z" />
                </g>
              </svg>


            </p>
            <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded"
              role="button" aria-label="show or hide">
              <svg class="transform text-gray-300 dark:text-white" width="10" height="6" viewBox="0 0 10 6" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 5L1 1" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-600 dark:text-gray-300" id="sect">You will
            be responsible for paying for your own shipping costs for returning your item. Shipping costs are
            nonrefundable</div>
        </div>
      </div>
      <div>

        <div class="border-b py-4 border-gray-200">
          <div data-menu class="flex justify-between items-center cursor-pointer">
            <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Contact us</p>
            <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded"
              role="button" aria-label="show or hide">
              <svg class="transform text-gray-300 dark:text-white" width="10" height="6" viewBox="0 0 10 6" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 5L1 1" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-600 dark:text-gray-300" id="sect">If you
            have any questions on how to return your item to us, contact us.</div>
        </div>
    </div>
    <button         
>submit</button>
  </form>
  </div>
</div>
<paymentForm/>
</template>
