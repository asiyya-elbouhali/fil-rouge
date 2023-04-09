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
import { Head } from "@inertiajs/vue3";
import SoftwareCard from "@/Components/sb_softwares/SoftwareCard.vue";
import MainNavLayout from "@/Components/headers/MainNavLayout.vue";
import theFooter from "@/Components/footer/theFooter.vue";
</script>
<template>
  <!-- <h1> {{ $page.props.auth }}</h1> -->
  <Head title="Softwares" />
  <SoftwareCard :softwares="$page.props.softwares" >

</SoftwareCard>

</template>
