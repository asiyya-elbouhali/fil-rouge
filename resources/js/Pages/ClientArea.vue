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
import MainNavLayout from '@/Components/headers/MainNavLayout.vue';
import theFooter from '@/Components/footer/theFooter.vue';
import ClientNavBar from '@/Components/headers/ClientSpaceNavBar.vue'


import userSoftware from '@/Components/sb_users/userSoftware.vue';

import { useGeneralStore } from '@/stores/general';
import { storeToRefs } from 'pinia';

const useGeneral=useGeneralStore()
const { isPostOverlay,isCropperModal,isImageDisplay}=storeToRefs(useGeneral)

const user=usePage().props.auth.user


const props=defineProps(['canLogin','canRegister']);
</script>

<template>
<!-- {{ $page.props.orders }} -->


<ClientNavBar/>
<slot/>

<user-software  :orders="$page.props.orders" />



</template>
