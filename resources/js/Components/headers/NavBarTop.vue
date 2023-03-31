<template>
  <div class="bg-white ">
  <div class="border py-3 px-6  ">
    <div class="flex justify-between border-b backdrop-blur bg-white/90 dark:bg-gray-900/70 dark:border-gray-700 xl:fixed xl:w-full xl:top-0 xl:left-0 xl:z-30">
      <div class="flex items-center">
        <img src="company['icon']" alt="company['label']" />

        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
        </svg>
        <span class="ml-2 font-semibold text-[#252C32]">label </span>
      </div>

      <div class="ml-6 flex flex-1 gap-x-3">


        <input type="text" class="w-full rounded-md border border-[#DDE2E4] px-3 py-2 text-sm" value="DJI phantom" />
      </div>

      <div class="ml-2 flex">
        <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
            <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>
          <span class="text-sm font-medium">Orders</span>
        </div>



        <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
          </svg>
          <span class="text-sm font-medium">Favorites</span>
        </div>

        <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
          <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
              <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
            <span class="absolute -top-2 -right-2 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 p-2 text-xs text-white">3</span>
          </div>
          <span class="text-sm font-medium">Cart</span>
        </div>

        <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
            <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>
           <span class="text-sm font-medium">language </span>
        </div>

        <div v-if="canLogin">
            <Link
                v-if="$page.props.auth.user"
                :href="route('logout')"
                >
            <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
            <svg width="16" height="16" viewBox="0 0 20.48 20.48" class="icon" xmlns="http://www.w3.org/2000/svg"><path d="M19.04 6.37H1.472c-0.544 1.184 -0.832 2.496 -0.832 3.872s0.288 2.688 0.832 3.872h17.536c0.544 -1.184 0.832 -2.496 0.832 -3.872s-0.288 -2.688 -0.8 -3.872z" fill="#9DE8F7"/><path d="M20.48 10.242c0 -5.664 -4.576 -10.24 -10.24 -10.24S0 4.578 0 10.242c0 4.992 3.584 9.152 8.32 10.048l0.001 0.001c0.268 0.051 0.649 0.116 1.06 0.154 0.227 0.018 0.456 0.029 0.685 0.033h0.092c0.776 -0.016 1.789 -0.185 2.107 -0.241 4.683 -0.906 8.214 -5.04 8.214 -9.995zm-1.76 -4.512h-1.568a12.447 12.447 0 0 0 -3.488 -4.448A9.704 9.704 0 0 1 18.72 5.73zM11.872 0.77c0.288 0.16 3.04 1.792 4.576 4.96h-3.616c-0.576 -2.4 -1.44 -4.224 -1.888 -5.056 0.32 0.032 0.64 0.064 0.928 0.096zm0.32 4.96H8.32c0.64 -2.592 1.6 -4.448 1.92 -5.024 0.32 0.576 1.28 2.432 1.952 5.024zM9.536 0.674c-0.448 0.832 -1.312 2.656 -1.888 5.056H4.032c1.536 -3.168 4.32 -4.8 4.576 -4.96a88.055 88.055 0 0 1 0.928 -0.096zm-2.72 0.608C5.728 2.178 4.288 3.65 3.36 5.73h-1.6a9.704 9.704 0 0 1 5.056 -4.448zM0.64 10.242c0 -1.376 0.288 -2.688 0.832 -3.872H19.04c0.512 1.184 0.8 2.496 0.8 3.872s-0.288 2.688 -0.832 3.872H1.472a9.243 9.243 0 0 1 -0.832 -3.872zm1.12 4.512h1.536a12.163 12.163 0 0 0 3.424 4.416c-2.112 -0.832 -3.872 -2.432 -4.96 -4.416zm6.752 4.928C7.936 19.33 5.44 17.73 4 14.754h3.52a17.943 17.943 0 0 0 2.016 5.056c-0.32 -0.032 -0.672 -0.064 -1.024 -0.128zm-0.32 -4.928h4.096c-0.384 1.632 -1.056 3.296 -2.048 4.96 -0.992 -1.696 -1.664 -3.36 -2.048 -4.96zm2.72 5.056a18.326 18.326 0 0 0 2.016 -5.056h3.52c-1.408 2.976 -3.936 4.608 -4.48 4.928 -0.352 0.064 -0.704 0.096 -1.056 0.128zm2.848 -0.64c1.088 -0.928 2.496 -2.368 3.424 -4.416h1.536c-1.088 1.984 -2.848 3.584 -4.96 4.416z"/><path d="M2.112 10.144c0 -0.384 0.064 -0.704 0.16 -0.992 0.096 -0.192 0.224 -0.352 0.352 -0.512 0.16 -0.16 0.32 -0.256 0.48 -0.352a2.14 2.14 0 0 1 0.832 -0.16c0.576 0 1.024 0.16 1.344 0.512 0.352 0.352 0.512 0.832 0.512 1.44s-0.16 1.088 -0.512 1.44c-0.32 0.352 -0.768 0.512 -1.344 0.512s-1.024 -0.16 -1.344 -0.512 -0.48 -0.768 -0.48 -1.376zm0.8 -0.032c0 0.448 0.096 0.768 0.288 0.992 0.192 0.224 0.448 0.32 0.768 0.32s0.544 -0.096 0.768 -0.32c0.192 -0.224 0.288 -0.544 0.288 -0.992 0 -0.448 -0.096 -0.768 -0.288 -0.992s-0.448 -0.32 -0.768 -0.32 -0.576 0.096 -0.768 0.32c-0.192 0.224 -0.288 0.544 -0.288 0.992zm6.016 1.92h-0.736v-1.408c0 -0.288 0 -0.48 -0.032 -0.576s-0.096 -0.16 -0.16 -0.192c-0.064 -0.064 -0.16 -0.064 -0.256 -0.064a0.645 0.645 0 0 0 -0.352 0.096c-0.096 0.064 -0.16 0.16 -0.192 0.288s-0.064 0.32 -0.064 0.64v1.248H6.4v-2.752h0.672v0.416c0.256 -0.32 0.544 -0.48 0.896 -0.48 0.16 0 0.32 0.032 0.448 0.096s0.224 0.128 0.288 0.224c0.064 0.096 0.128 0.192 0.128 0.32 0.032 0.128 0.032 0.288 0.032 0.48l0.064 1.664zm0.736 0v-3.84H10.4V12h-0.736v0.032zm1.472 -3.136v-0.672h0.736v0.672h-0.736zm0 3.136V9.28h0.736v2.752h-0.736zm4 0H14.4v-1.408c0 -0.288 0 -0.48 -0.032 -0.576s-0.096 -0.16 -0.16 -0.192c-0.064 -0.064 -0.16 -0.064 -0.256 -0.064a0.645 0.645 0 0 0 -0.352 0.096c-0.096 0.064 -0.16 0.16 -0.192 0.288s-0.064 0.32 -0.064 0.64v1.248h-0.736v-2.752h0.672v0.416c0.256 -0.32 0.544 -0.48 0.896 -0.48 0.16 0 0.32 0.032 0.448 0.096s0.224 0.128 0.288 0.224 0.128 0.192 0.128 0.32c0.032 0.128 0.032 0.288 0.032 0.48l0.064 1.664zm2.336 -0.896 0.736 0.128c-0.096 0.256 -0.256 0.48 -0.448 0.608s-0.448 0.224 -0.768 0.224c-0.48 0 -0.832 -0.16 -1.056 -0.48 -0.192 -0.256 -0.288 -0.576 -0.288 -0.96 0 -0.448 0.128 -0.832 0.352 -1.088 0.224 -0.256 0.544 -0.384 0.896 -0.384 0.416 0 0.736 0.128 0.96 0.416 0.224 0.256 0.352 0.672 0.352 1.248h-1.824c0 0.224 0.064 0.384 0.192 0.512s0.256 0.192 0.416 0.192c0.128 0 0.224 -0.032 0.288 -0.096s0.16 -0.16 0.192 -0.32zm0.064 -0.736c0 -0.224 -0.064 -0.384 -0.16 -0.48s-0.224 -0.16 -0.384 -0.16 -0.288 0.064 -0.384 0.16a0.786 0.786 0 0 0 -0.16 0.48h1.088z"/></svg>
            <span class="text-sm font-medium">Logout</span>
            </div>
                </Link
            >

            <template v-else>
               <nav-link v-if="canLogin" :active="true" :href="route('login')"
       >
       <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm font-medium">Login</span>
            </div>
       </nav-link
       >

               <nav-link v-if="canRegister" :active="true" :href="route('register')"
       >
       <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm font-medium">Register</span>
            </div>
       </nav-link
       >

            </template>

        </div>





      </div>
    </div>


  </div>
</div>
</template>

<script setup>
 import { Head, Link } from '@inertiajs/vue3';
import NavLink from '@/components/shared/NavLink.vue';

const props = defineProps(['canLogin','canRegister']);

</script>

<style>

</style>
