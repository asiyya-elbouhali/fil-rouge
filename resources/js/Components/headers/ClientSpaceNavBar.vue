<script setup>
import { Head, Link,usePage } from '@inertiajs/vue3';
import theFooter from '@/Components/footer/theFooter.vue';







</script>

<template>
<!-- {{ $page.props.orders }} -->


<ul class=" text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
    <li class="w-full">
        
        <Link href="#"
        :class="{ 'active': $page.component === 'ClientArea' }"
        class="inline-block w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white"
        aria-current="page">My Software
        </Link>
    </li> 
    <li class="w-full">
    <!-- // Component exact match... -->
    <Link href="/ClientArea"
    :class="{ 'active': $page.url === '/' }"
    class="inline-block w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white">
    Orders</Link>

    </li>
    <li class="w-full">
        <a href="#" class="inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Settings</a>
    </li>
    <li class="w-full">
        <Link href="MyInvoices"
        :class="{ 'active': $page.component === 'MyInvoices' }"
         class="inline-block w-full p-4 bg-white rounded-r-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">My Invoices</Link>
    </li>
</ul>

<!-- <inertia-link href="/">Home</inertia-link> -->
<!-- <user-software  :orders="$page.props.orders" /> -->



</template>
