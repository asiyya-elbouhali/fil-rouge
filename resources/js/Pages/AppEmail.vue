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
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import actionTable from '@/Components/sb_dashboard_tables/table.vue'
import card from '@/Components/sb_softwares/SoftwareCard.vue'

</script>

<template>
     <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Thank you</p>
</template>
