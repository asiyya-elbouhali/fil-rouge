<template>

<nav-bar-top

            :sites="sites"
            :locale="locale"
            :locales="locales"
            />

<nav-bar-top-sub

            :sites="sites"
            :locale="locale"
            :locales="locales"
            />
</template>


<script setup>
 import { Head, Link } from '@inertiajs/vue3';

import NavBarTop from '@/components/shared/NavBarTop.vue';
import NavBarTopSub from '@/components/shared/NavBarTopSub.vue';

const props=defineProps(['canLogin','canRegister',
                         'sites','locale','locales']);

</script>

<style>

</style>
