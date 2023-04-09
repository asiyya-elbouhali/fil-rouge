<script setup>
import { useForm } from '@inertiajs/vue3'
defineProps({ errors: Object })
const form = useForm({
  name: null,
  email: null,
  message: null,
  remember: false,
})
</script>

<template>

    <!-- component -->
    <div class=" w-full">
<form @submit.prevent="form.post('/sendEmail')"
        class="w-full mx-auto max-w-lg"
        >

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
        <h2 class="text-center  my-9 text-lg">Form</h2>

      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Full Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
      v-model="form.name"
      id="name"
      type="text"
      >

      <p class="text-gray-600 text-xs italic">Remove if not needed</p>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        E-mail
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
      id="email"
      v-model="form.email"
      type="email"
      >
      <div v-if="form.errors.email">{{ form.errors.email }} </div>
      <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Message
      </label>

      <textarea
      class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
      v-model="form.message"
      id="message"
      >
    </textarea>
      <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p>
    </div>

  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3">
      <button class="shadow bg-teal-400 mb-9 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
      type="submit"
      >
        Send
      </button>
    </div>
    <div class="md:w-2/3"></div>
  </div>
</form>
</div>
</template>
