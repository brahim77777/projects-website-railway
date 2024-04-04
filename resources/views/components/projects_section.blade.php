<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-warm-gray-50">
    <div class="mx-auto max-w-md pt-24 pb-12 px-4 sm:max-w-3xl sm:py-32 sm:px-6 lg:max-w-7xl lg:px-8">
        <ul role="list"
            class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-2 xl:gap-x-8">
            <!-- Rest of the code remains the same -->

            @foreach ($projects as $project)
                <li class="relative mt-3 ">
                    <div x-data="{ live_demo: {{ $project->live_demo }}, github_repo: '{{ $project->github_repo }}' }"
                        class="group aspect-w-10 aspect-h-7 block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">

                        <img src="{{ asset("/storage/photos/$project->photo") }}" alt="{{ $project->title }}"
                            class="pointer-events-none object-cover group-hover:opacity-75">
                        <button type="button"
                            @click="gotoProject('{{ $project->live_demo }}' , '{{ $project->github_repo }}')"
                            class="absolute inset-0 focus:outline-none">
                            <span class="sr-only"></span>
                        </button>
                    </div>


                </li>

                <div class="relative flex flex-col justify-between">

                    <div class=" mb-[20%]">
                        <hr class="mt-4">

                        <h1 class="font-bold text-2xl  text-gray-800">{{ $project->title }}</h1>
                        <p class="text-sm mb-5">{{ $project->type }}</p>
                        <p class="text-gray-500">{{ $project->description }} Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Explicabo quam aut corporis, repellat odit voluptatum porro nemo,
                            laboriosam
                            recusandae corrupti maiores ad velit inventore maxime quos dolorem, neque amet. Hic.
                        </p>
                        <p>
                            <hr class="mt-4">
                            {{ $project->technologies }}
                        </p>
                    </div>

                    <p class="bottom absolute bottom-0 ltr:right-0 rtl:left-0 text-green-400 ">
                        @if ($project->live_demo)
                            <a href="{{ $project->live_demo == '' ? '#' : $project->live_demo }}"
                                {{ $project->live_demo == '' ? '' : "target = '_blank'" }}
                                class="px-5 py-2 rounded-md border-2 border-green-400 hover:bg-green-400 hover:text-white transition-all ">{{ __('demo') }}</a>
                        @endif
                        @if ($project->github_repo)
                            <a href="{{ $project->github_repo == '' ? '#' : $project->github_repo }}"
                                {{ $project->github_repo == '' ? '' : "target = '_blank'" }}
                                class="px-5 py-2 rounded-md border-2 border-green-400 hover:bg-green-400 hover:text-white transition-all ">{{ __('github') }}</a>
                        @endif

                    </p>

                </div>
            @endforeach




        </ul>
    </div>
</div>
