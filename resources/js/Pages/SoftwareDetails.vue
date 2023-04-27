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
import softwareDetailsCard from "@/Components/sb_softwares/softwareDetailsCard.vue";
</script>
<template>

  <Head title="Softwares" />
<softwareDetailsCard  :details=$page.props.details
                      :AllBusinessCategories=$page.props.AllBusinessCategories
 />



</template>
