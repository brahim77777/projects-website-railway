<form wire:submit="save" class="space-y-6">
    <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            {{-- Project Section --}}
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __('Project') }}</h3>
                <p class="mt-1 text-sm text-gray-500"></p>


            </div>


            <div class="mt-5 space-y-6 md:col-span-2  md:mt-0">
                {{-- Title --}}

                <div class="col-span-6 sm:col-span-3">
                    <label for="title" class="block text-sm font-medium text-gray-700 ">{{ __('Title') }}
                        <super class="text-red-500">*</super>

                    </label>
                    <input wire:model="title" type="text" name="title" id="title" autocomplete="given-name"
                        class="border  p-1 px-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">

                    @if ($errors->has('title'))
                        <p class="text-red-500 text-xs italic">{{ $errors->first('title') }}</p>
                    @endif
                </div>




                {{-- Live Demo Section --}}


                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="company-website"
                            class="block text-sm font-medium text-gray-700 ">{{ __('Live Demo') }}</label>
                        <div dir="ltr" class="mt-1 flex rounded-md shadow-sm ">
                            <span
                                class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span>
                            <input wire:model="live_demo" type="text" name="company-website" id="company-website"
                                class="p-1  border block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="www.example.com">
                        </div>
                    </div>
                    @if ($errors->has('live_demo'))
                        <p class="text-red-500 text-xs italic">{{ $errors->first('live_demo') }}</p>
                    @endif
                </div>

                <div class="mt-5 space-y-6 md:col-span-2 md:mt-0">
                    {{-- Github repository --}}

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="github_repo"
                                class="block text-sm font-medium text-gray-700 ">{{ __('Github Repository') }}</label>
                            <div dir="ltr" class="mt-1 flex rounded-md shadow-sm ">
                                <span
                                    class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span>
                                <input wire:model="github_repo" type="text" name="github_repo" id="github_repo"
                                    class="p-1  border block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="www.github.com/example.com">
                            </div>
                        </div>
                        @if ($errors->has('github_repo'))
                            <p class="text-red-500 text-xs italic">{{ $errors->first('github_repo') }}</p>
                        @endif
                    </div>
                    {{-- Description --}}
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">{{ __('Description') }}
                            <super class="text-red-500">*</super>
                        </label>
                        <div class="mt-1">
                            <textarea wire:model="description" id="description" name="description" rows="3"
                                class="border  p-1 px-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="{{ __('Describe the project.') }}"></textarea>
                        </div>
                        @if ($errors->has('description'))
                            <p class="text-red-500 text-xs italic">{{ $errors->first('description') }}</p>
                        @endif
                    </div>


                    {{-- Photo --}}
                    @if ($photo)
                        <hr class="my-10">

                        <div class="sm:mt-10">
                            <p class="text-lg mb-5 font-medium leading-6  text-gray-900 ">{{ __('Photo Preview') }}
                            </p>

                            <div class=" border-2 border-gray-300 border-dashed p-5">
                                <img src="{{ $photo->temporaryUrl() }}">
                            </div>
                        </div>
                    @endif

                    <label class="block text-sm font-medium text-gray-700">{{ __('Project Photo') }}</label>
                    <div
                        class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48" aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload"
                                    class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input wire:model="photo" accept="image/*," id="file-upload" name="file-upload"
                                        type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>


                    </div>
                    @if ($errors->has('photo'))
                        <div class="text-red-400">
                            <p class="text-red-500 text-xs italic">{{ $errors->first('photo') }}</p>
                        </div>
                    @endif

                    <hr>
                    <div class="md:grid md:grid-cols-3 md:gap-6">

                        <div class="mt-5 md:col-span-2 md:mt-0">
                            <div class="grid grid-cols-6 gap-6">


                                {{-- Project Type --}}
                                <div class="col-span-6">
                                    <label for="type"
                                        class="block text-sm font-medium text-gray-700">{{ __('Project Type') }}
                                    </label>
                                    <select wire:model="type" id="type" name="type" autocomplete="project type"
                                        class=" mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm ">
                                        <option value="Web Application">Web Application</option>
                                        <option value="Mobile Application">Mobile Application</option>
                                        <option value="Data Science Application">Data Science Application</option>
                                        <option value="Other">Other</option>

                                    </select>

                                    @if ($errors->has('type'))
                                        <p class="text-red-500 text-xs italic">{{ $errors->first('type') }}</p>
                                    @endif
                                </div>

                                {{-- Technologies --}}

                                <div class="col-span-6">
                                    <label for="technology"
                                        class="block text-sm font-medium text-gray-700">{{ __('Technologies Used') }}
                                        <super class="text-red-500">*</super>
                                    </label>
                                    <textarea wire:model="technologies" type="text" name="technology" id="technology" autocomplete="technology"
                                        class="px-2 border p-1 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="write down the technologies used"></textarea>

                                    @if ($errors->has('technologies'))
                                        <p class="text-red-500 text-xs italic">{{ $errors->first('technologies') }}
                                        </p>
                                    @endif
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <span class="m-4 ">
            <hr>
        </span>
        <div class="flex  justify-end mt-3">
            <button type="button"
                class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('Cancel') }}</button>
            <button type="submit"
                class="ml-3 rtl:mr-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('Save') }}</button>
        </div>
    </div>






</form>
