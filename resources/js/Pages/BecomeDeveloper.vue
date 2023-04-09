<script>
import Layout from '@/Pages/Layout.vue'
export default {
  // Using a render function...
  layout: (h, page) => h(Layout, [page]),
  // Using shorthand syntax...
  layout: Layout,
}
</script>
<script setup>
import { Head, Link,usePage } from '@inertiajs/vue3';
import BecomeDeveloper from '@/Components/sb_developer/developerForm.vue'


import { useGeneralStore } from '@/stores/general';
import { storeToRefs } from 'pinia';

const useGeneral=useGeneralStore()
const { isPostOverlay,isCropperModal,isImageDisplay}=storeToRefs(useGeneral)

const user=usePage().props.auth.user


</script>

<template>
   <h2>{{ error  }}</h2>

<!-- {{ $page.props.orders }} -->

<BecomeDeveloper/>



</template>
