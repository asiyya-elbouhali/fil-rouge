

<template>
<nav-bar-top></nav-bar-top>
<nav-bar-top-sub ></nav-bar-top-sub>
</template>


<script setup>

import navBarTop from '@/Components/headers/NavBarTop.vue'

import navBarTopSub from '@/Components/headers/NavBarTopSub.vue';

const props=defineProps(['canLogin','canRegister']);

</script>
