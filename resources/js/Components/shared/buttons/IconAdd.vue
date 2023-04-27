<script setup>

import {ref} from 'vue';

const cloudName = "dzay8q1mt"; // replace with your own cloud name
const uploadPreset = "ovhqszmn"; // replace with your own upload preset

const myWidget = cloudinary.createUploadWidget(
  {
    cloudName: cloudName,
    uploadPreset: uploadPreset,

    folder: "icons", //upload files to the specified folder
   
  },
  (error, result) => {
    if (!error && result && result.event === "success") {
      console.log("Done! Here is the image info: ", result.info.url);
  localStorage.setItem('icon',result.info.url)
    
      document
        .getElementById("uploadedimage")
        .setAttribute("src", result.info.secure_url);
    }
  }
);

function open(){
    myWidget.open();
}
const IconImage = ref()
</script>

<template>
     <div class="col-span-full">
                    <label for="icon" class="block text-sm font-medium leading-6 text-gray-900">Icon</label>
                    <div class="mt-2 flex items-center gap-x-3">
                      <UserCircleIcon class="h-12 w-12 text-gray-300" aria-hidden="true" />
                      <button type="button"
                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                        <p @click="open()" class="cursor-pointer">Test2</p>

                      </div>
                  </div>
</template>