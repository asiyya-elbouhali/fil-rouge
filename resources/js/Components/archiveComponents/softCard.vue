<template>
      <!-- Carousel Body -->
      <div v-for="soft in softwares"
            :key="soft.id" class="relative flex flex-column  rounded-lg md:flex items-center w-9/12 bg-gray-100 shadow-xl lg:my-2 " style="min-height: 19rem;">
      <div class="relative lg:w-full md:w-full md:h-3/5 overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg" style="min-height: 19rem;">
        <img class="lg:absolute inset-0 w-full h-full object-cover object-center"

        src="https://picsum.photos/200/300" alt="">


        <div class="absolute inset-0 w-full h-full bg-indigo-900 opacity-75"></div>
        <div class="absolute inset-0 w-full h-full flex items-center justify-center fill-current text-white">

        </div>
      </div>
      <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
        <div class="py-12 px-0 md:pr-24 md:pl-16 md:py-12">
          <p class="text-gray-600"><span class="text-gray-900">
            {{soft.name}} </span> is a
            {{soft.description}} </p>


            <div class="flex space-x-20 ">

          <a class="flex items-baseline  mt-3 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900" href="">
            <span class=""><downloadButton/></span>
            <!-- <span class="text-xs ml-1">&#x279c;</span> -->
          </a>

          <Link   class="flex items-baseline mt-6 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900"
          :href="route('software.details',{id:soft.id})"
          >
            <span class="">Details</span>
            <span class="text-xs ml-1">&#x279c;</span>
          </Link>
        </div>

        </div>
        <!-- <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 90" preserveAspectRatio="none">
          <polygon points="50,0 100,0 60,100 10,100" />
        </svg> -->
      </div>

    </div>
</template>