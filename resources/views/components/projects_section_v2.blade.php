<div class="flex flex-wrap pb-24 gap-2 justify-center">
    @foreach ($projects as $project)
        <div class="mb-10 max-w-sm hover:shadow-xl transition-all bg-white border border-gray-200 rounded-lg shadow  ">
            <a href="#" class="">
                <img class="rounded-t-lg" src="{{ asset("/storage/photos/$project->photo") }}" alt="" />
            </a>
            <div class="p-5 ">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $project->title }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">{{ $project->description }}</p>
                @if ($project->live_demo or $project->github_repo)
                    <a href="{{ $project->live_demo ?? $project->github_repo }}" target="_blank"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-400 rounded-lg hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300  ">
                        {{ __('visit') }}
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    @endforeach
</div>
