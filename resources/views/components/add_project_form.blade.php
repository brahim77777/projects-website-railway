<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form class="space-y-6" action="#" method="POST">
  <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <h3 class="text-lg font-medium leading-6 text-gray-900">{{__("Project")}}</h3>
        <p class="mt-1 text-sm text-gray-500"></p>
      </div>
      <div class="mt-5 space-y-6 md:col-span-2 md:mt-0">
        <div class="grid grid-cols-3 gap-6">
          <div class="col-span-3 sm:col-span-2">
            <label for="company-website" class="block text-sm font-medium text-gray-700 ">{{__("Live Demo")}}</label>
            <div class="mt-1 flex rounded-md shadow-sm ">
              <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span>
              <input type="text" name="company-website" id="company-website" class="p-1  border block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="www.example.com">
            </div>
          </div>
        </div>

        <div>
          <label for="description" class="block text-sm font-medium text-gray-700">{{__("Description")}}</label>
          <div class="mt-1">
            <textarea id="description" name="description" rows="3" class="border  p-1 px-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
          </div>
          <p class="mt-2 text-sm text-gray-500">{{__("Describe the project.")}}</p>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Project photo</label>
          <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload Image</span>
                  <input id="file-upload" name="file-upload" type="file" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs text-gray-500">PNG, JPG, JPEG , or similar</p>
            </div>
          </div>
        </div>
        <hr>
        <div class="md:grid md:grid-cols-3 md:gap-6">

          <div class="mt-5 md:col-span-2 md:mt-0">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="title" class="block text-sm font-medium text-gray-700">{{__("Title")}}</label>
                <input type="text" name="title" id="title" autocomplete="given-name" class="border  p-1 px-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>



              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">{{__("Github repository")}}</label>
                <input type="text" name="email-address" id="email-address" autocomplete="email" class="border  p-1 px-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="type" class="block text-sm font-medium text-gray-700">{{__("Project type")}}</label>
                <select id="type" name="type" autocomplete="project type" class=" mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option>Web Application</option>
                  <option>Mobile Application</option>
                  <option>Data Science Application</option>
                </select>
              </div>

              <div class="col-span-6">
                <label for="technology" class="block text-sm font-medium text-gray-700">{{__("Technologies Used")}}</label>
                <textarea type="text" name="technology" id="technology" autocomplete="technology" class="px-2 border p-1 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="write down the technologies used"></textarea>
              </div>


            </div>
          </div>
        </div>
      </div>

    </div>
  </div>





  <div class="flex justify-end">
    <button type="button" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</button>
    <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
  </div>
</form>
