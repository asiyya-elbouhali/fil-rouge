<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import actionTable from '@/Components/sb_dashboard_tables/table.vue'
import card from '@/Components/sb_softwares/SoftwareCard.vue'

</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>
        <div class="flex">
            <editButton/>
            <favoriButton/>
        </div>
        <tableActionRole/>

<card/>
        <actionTable/>

    </AuthenticatedLayout>
</template>
