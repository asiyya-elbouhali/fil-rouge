
<script setup>
import { Link } from '@inertiajs/vue3';
import downloadButton from '@/Components/shared/buttons/downloadButton.vue'

const props = defineProps(['softwares']);

</script>

<template>
<!-- {{ softwares }} -->
<!-- component -->
<!-- Display Container (not part of component) START -->
<div class="bg-gray-200  overflow-x-hidden ">
<div class="bg-cover bg-center text-center   object-cover object-center rounded-bl-full rounded-br-full h-48 opacity-20 bg-[url('https://sm.pcmag.com/pcmag_au/gallery/t/the-best-f/the-best-free-software-of-2023_3afj.jpg')] ">
<h2 class="text-6xl text-slate-50 pt-16 "> Software</h2>
</div>

<!-- component -->

<div class="py-1 ">
            <!-- <div >
                <h2 class="text-2xl font-semibold leading-tight">Users</h2>
            </div> -->
            <div class="my-8 flex sm:flex-row flex-col  justify-end">
                <div class="flex flex-row mb-1 sm:mb-0 mr-8">
                  <div class="block relative">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                    <input placeholder="Search"
                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>
                    <div class="relative">
                        <select
                            class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option>5</option>
                            <option>10</option>
                            <option>20</option>
                        </select>
                       
                    </div>
                    <div class="relative">
                        <select
                            class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                            <option>All</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                     
                    </div>
                </div>
              
            </div>
          
        </div>

            


<div class="my-0 mx-5 p-3 sm:p-24 lg:p-20 grid lg:grid-cols-2 gap-9 md:grid-cols-1  ">

  




    <!-- component -->
<!-- This is an example component -->
<div  v-for="soft in softwares" :key="soft.id" 
class='flex items-center justify-center min-h-screen from-[#F9F5F3] via-[#F9F5F3] to-[#F9F5F3] '>
    <div class='w-full max-w-md  mx-auto bg-white rounded-3xl shadow-xl overflow-hidden'>
        <div class='max-w-md mx-auto'>
          <div class='h-[236px]' style='background-image:url(https://gdm-catalog-fmapi-prod.imgix.net/ProductScreenshot/c33d6b74-6d64-426b-97c6-21ed6048239d.jpg);background-size:cover;background-position:center'>
           </div>
          <div class='p-4 sm:p-6'>
            <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1'>{{soft.name}}</p>
            <div class='flex flex-row'>
              <p class='text-[#3C3C4399] text-[17px] mr-2 line-through'>MVR 700</p>
              <p class='text-[17px] font-bold text-[#0FB478]'>MVR 700</p>
            </div>
            <p class='text-[#7C7C80] font-[15px] mt-6'>{{soft.description}}.</p>


              <a target='_blank' href='foodiesapp://food/1001' class='block mt-10 w-full px-4 py-3 font-bold tracking-wide text-white  text-center capitalize transition-colors duration-300 transform bg-[#056989] rounded-[14px] hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                  Download
              </a>
            <!-- <a target='_blank' href="https://apps.apple.com/us/app/id1493631471" class='block mt-1.5 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform rounded-[14px] hover:bg-[#F2ECE7] hover:text-[#000000dd] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                  Download app
              </a> -->
              <Link   class="flex justify-end items-baseline mt-6 text-lback-600 hover:text-indigo-900 focus:text-indigo-900"
          :href="route('software.details',{id:soft.id})"
          >
            <span class="">Details</span>
            <span class="text-xs ml-1">&#x279c;</span>
          </Link>
          </div>
        </div>
    </div>
</div>


  </div>
</div>
  <!-- Display Container (not part of component) END -->
</template>

<style>

</style>
