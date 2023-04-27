<script setup>
import { Head, Link,usePage } from '@inertiajs/vue3';
import MainNavLayout from '@/Components/headers/MainNavLayout.vue';
import theFooter from '@/Components/footer/theFooter.vue'


import { useGeneralStore } from '@/stores/general';
import { storeToRefs } from 'pinia';

const useGeneral=useGeneralStore()
const { isPostOverlay,isCropperModal,isImageDisplay}=storeToRefs(useGeneral)

// const user=usePage().props.auth.user


const props=defineProps(['canLogin','canRegister']);
</script>

<template>
<main-nav-layout>
</main-nav-layout>
<slot >


</slot>



<the-footer/>


</template>
