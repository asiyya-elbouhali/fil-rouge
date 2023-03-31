<script setup>
import Magnify from 'vue-material-design-icons/Magnify.vue';
import Home from 'vue-material-design-icons/Magnify.vue';
import HomeOutline from 'vue-material-design-icons/Magnify.vue';
import TelevisionPlay from 'vue-material-design-icons/TelevisionPlay.vue';
import StorefrontOutline from 'vue-material-design-icons/StorefrontOutline.vue';
import AccountGroup from 'vue-material-design-icons/AccountGroup.vue';
import ControllerClassicOutline from 'vue-material-design-icons/ControllerClassicOutline.vue';
import DotsGrid from 'vue-material-design-icons/DotsGrid.vue';
import FacebookMessenger from 'vue-material-design-icons/FacebookMessenger.vue';
import Bell from 'vue-material-design-icons/Bell.vue';
import Logout from 'vue-material-design-icons/Logout.vue';

 const props = defineProps(['canLogin','canRegister']);
import { Link } from "@inertiajs/vue3";
</script>


<template>
  <div class="bg-white ">
  <div class="border py-0 px-6  ">
    <div class="mt-0 flex items-center justify-between">
      <div class="flex gap-x-2 py-1 px-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
        </svg>
        <span class="text-sm font-medium">Morocco</span>
      </div>


      <div class="flex-auto ">
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"> <Link href="/products">Our products</Link></span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"> <Link href="/dashboard">dashboard</Link></span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"> <Link href="/about">About</Link></span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"> <Link href="/categorie">categorie</Link></span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"> <Link href="/">Home</Link></span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"> <Link href="/">Home</Link></span>
    </div>

      <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"><Link href="/dashboard">Become a seller</Link> </span>

    </div>
  </div>
</div>

</template>


<style>

</style>
