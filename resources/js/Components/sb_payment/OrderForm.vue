<script setup>
</script>

<template>

<!-- component -->
<!-- This is an example component -->
<div
        class="w-full h-14 pt-2 text-center  bg-gray-700  shadow overflow-hidden sm:rounded-md font-bold text-3xl text-white ">
        Job Requisition Form

    </div>

    <section class="text-gray-600 body-font  m-0 p-0 relative"></section>


    <div class="container    mx-auto">
        <div class="flex flex-col text-center w-full mb-1">

        </div>

        <div class="mt-10 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-2 py-8 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Requisition
                                    No</label>
                                <input type="text" name="first-name" placeholder="1" id="first-name"
                                    autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Requisition
                                    date</label>
                                <input type="text" name="last-name" placeholder="09/02/2021" id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 text-gray-300  focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Required
                                    date</label>
                                <input type="text" name="last-name" placeholder="09/02/2021" id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>




                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">
                                    Designation</label>
                                <input type="text" name="last-name" placeholder="Gate Pass Officer" id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>



                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">
                                    Location</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Head office</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">
                                    project</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>construction Road</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>



                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">
                                    Gender</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Male</option>
                                    <option>female</option>
                                    <option>other</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">
                                    Age</label>
                                <input type="text" name="last-name" placeholder="above 18" id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>


                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">
                                    No of Vacanices</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">
                                    Job Lavel</label>
                                <input type="text" name="last-name" id="last-name" placeholder="internee officer"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>



                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">
                                    Department</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-3 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option class="mt-2">HR</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">
                                    Section</label>
                                <input type="text" name="last-name" placeholder="gate managment" id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>



                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">
                                    Academic Qualification</label>
                                <input type="text" name="last-name" placeholder="BBA" id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">
                                    Required experience</label>
                                <input type="text" name="last-name" placeholder="2 years or above" id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                    description</label>
                                <input type="text" name="email-address"
                                    placeholder="1- 334343434 It should be an editor to fill the job description of around 5 to 10 Lines ."
                                    id="email-address" autocomplete="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>


                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">
                                    No. of meetings/interviews</label>
                                <input type="text" name="last-name" placeholder="3" id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>


                        </div>
                        <fieldset class="mt-8 ">
                            <legend class=" text-base  text-1.5xl font-medium text-gray-900">Job Skill</legend>
                            <div class="mt-2 space-y-4">
                                <div class="flex place-items-center">
                                    <div class="flex items-center h-5">
                                        <input id="comments" name="comments" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-regular text-gray-700">Accounting</label>

                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="comments" name="comments" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-regular text-gray-700">Bookkeeping</label>

                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="comments" name="comments" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-regular text-gray-700">Auditing</label>

                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="comments" name="comments" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-regular text-gray-700">written
                                            communication</label>

                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="comments" name="comments" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-regular text-gray-700">Team
                                            Managment</label>

                                    </div>
                                </div>
                                <legend class=" text-base  text-1.5xl font-medium text-gray-900">
                                    Interview/type
                                </legend>
                                <div class="mt-2 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments"
                                                class="font-mediuregular text-gray-700">Technical</label>

                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="font-mediuregular text-gray-700">HR</label>

                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="font-mediuregular text-gray-700">Final</label>

                                        </div>
                                    </div>

                                    <legend class=" text-base  text-1.5xl font-medium text-gray-900">
                                        Competencies
                                    </legend>
                                    <div class="   space-y-4">
                                        <div class="flex  items-start">
                                            <div class="flex items-center h-5">
                                                <input id="comments" name="comments" type="checkbox"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class=" text-sm">
                                                <label for="comments"
                                                    class=" ml-3 font-mediuregular text-gray-700">Analysis</label>

                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="comments" name="comments" type="checkbox"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments" class="font-mediuregular text-gray-700">R &
                                                    D</label>

                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="comments" name="comments" type="checkbox"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments"
                                                    class="font-mediuregular text-gray-700">Bookkeeping</label>

                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="comments" name="comments" type="checkbox"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments" class="font-mediuregular text-gray-700">Quick
                                                    Larner</label>

                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="comments" name="comments" type="checkbox"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments" class="font-mediuregular text-gray-700">Team
                                                    Managment</label>

                                            </div>
                                        </div>


                                    </div>
                        </fieldset>

                    </div>
                    <div class="px-4 py-3 bg-white text-right sm:px-6">
                        <button type="submit"
                            class="mr-4 inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring ring-gray-500 ring-offset-4  text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2  focus:ring-indigo-500">
                            New
                        </button>
                        <button type="submit"
                            class="inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring  ring-indigo-500 ring-offset-4 bg-indigo-600 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2  focus:ring-indigo-500">
                            Save
                        </button>

                    </div>
                </div>
        </div>
        </form>
    </div>
    </section>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class=""></div>
        </div>
    </div>
   

</template>
