<script setup>
import { Head } from "@inertiajs/vue3";
import softwareDetailsCard from "@/Components/sb_softwares/softwareDetailsCard.vue";
import MainNavLayout from "@/Components/headers/MainNavLayout.vue";
import theFooter from "@/Components/footer/theFooter.vue";
import OrderCard from "@/Components/sb_softwares/OrderCard.vue";
</script>
<template>

  <!-- <h1> {{ $page.props.auth }}</h1> -->
  <MainNavLayout />
  <Head title="Softwares" />

<softwareDetailsCard  :details=$page.props.details >

</softwareDetailsCard>
<order-card>
</order-card>

  <theFooter />
</template>
