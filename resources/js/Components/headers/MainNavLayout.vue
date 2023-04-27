<script setup>

import { Link,usePage } from "@inertiajs/vue3";

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
//  const test = ref(false);

//  function  toggle(){

// this.test = ! this.test
// }
// const user=usePage().props.auth.user
// const user={"type":""}
</script>
<script>
export default{

  data(){

    return{
     test:false
    }
  },
  methods:{
    toggle(){

      this.test = ! this.test
    }
  }
}


</script>

<template>
<div id="MainNav" class="bg-white">
  <div class="border py-0 px-6  ">
    <div class="mt-0 flex items-center justify-between">


      <!-- Logo SoftBusinesss -->
      
  <div class="flex gap-x-2 py-1 px-2 w-25">
 

    <Link
             href="/"
            >
      <img class="md:flex hidden " src="/images/softbusiness-logo.png" alt="" >
    </Link>

    <Link
             href="/"
            >
      <img class="md:flex lg:hidden  " src="/images/MobileLogo.png" alt="" >
    </Link>
       </div>

      <!-- <div class="flex gap-x-2 py-1 px-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
        </svg>
        <span class="text-sm font-medium">Morocco</span>
      </div> -->
      <div class="flex-auto max-sm:hidden " :class="{'toggle':test}">
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium
                     hover:bg-gray-100">
             <Link
             href="/"
             >Home </Link>
        </span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium
                     hover:bg-gray-100">
             <Link
             href="/AllSoftwares"
             >Software</Link>
        </span>
      <span 
      v-if="usePage().props.auth.user">
           <span 
           v-if=" usePage().props.auth.user.type =='user'"

           class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium
                     hover:bg-gray-100">
             <Link
             href="/ClientArea"
             >My space </Link>
        </span>
        <span 
        v-if=" usePage().props.auth.user.type=='developer'|| usePage().props.auth.user.type=='admin'"
        class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium
                     hover:bg-gray-100">
             <Link
             href="/ClientArea"
             >Developer space </Link>
        </span>
        <span 
        v-if=" usePage().props.auth.user.type =='admin'"

        class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium
                     hover:bg-gray-100">
             <Link
             href="/AdminArea"
             >Admin space </Link>
        </span>
      </span>

        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium
                     hover:bg-gray-100">
             <Link
             href="/about"
             >About</Link>
        </span>
    </div>
    <!-- <div class="flex items-center justify-center bg-[#EFF2F5] p-1 rouded-full">
        <Magnify class="p-1" :size="22" fillColor="#64676B"/>
        <input
        class="
        lg:block
        hidden
        border-none
        p-0
        bg-[#EFF2F5]
        placeholder-[#64676B]
        ping-0
        focus:ring-0
        "
        placeholder="search Facebook"
        type="text"

        >
    </div> -->


    <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"><Link href="/BecomeDeveloper">Become a Developper</Link> </span>
       <button class="lg:hidden max-sm:block md:hidden" @click=toggle() >
        test
       </button>

    <Link v-if="$page.props.auth.user"
        class="w-1/12"
        :href="route('logout')"
        as="button"
        method="post"
       >
        <div class="flex items-center gap-3 hover:bg-gray-200 px-2 py-2.5 rounded-lg">
    <Logout
         class="pl-2"
         :size="20"/>
         <span class="max-sm:hidden">Logout</span>
        </div>
    </Link>
    <a v-else
        class="w-1/12"
        :href="route('login')"
        as="button"
        method="post"
       >
        <div class="flex items-center gap-3 hover:bg-gray-200 px-2 py-2.5 rounded-lg">
    <Logout
         class="pl-2"
         :size="30"/>
         <span class="max-sm:hidden">Login</span>
        </div>
    </a>



    </div>
  </div>
</div>

<slot/>

</template>















































































































































































































































































































































































































































































































<style>
 @media (max-width: 640px) {
.toggle {
 
    width: 100%;
    position: absolute;
    display: flex;
    flex-direction: column;
    left: 0;
    padding: 20px;
    top: 10%;
    background-color: #fff;
  }
}

</style>

