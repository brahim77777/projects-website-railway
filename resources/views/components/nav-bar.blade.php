<nav class="relative mx-auto flex max-w-7xl items-center justify-between px-4 pt-6 pb-2 sm:px-6 lg:px-8"
    aria-label="Global">
    <div class="flex w-full items-center justify-between lg:w-auto">
        <a href="#">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?color=emerald&amp;shade=300"
                alt="">
        </a>
        <div class="ltr:-mr-2 rtl:-ml-2 flex items-center lg:hidden">
            <button type="button"
                class="focus-ring-inset inline-flex items-center justify-center rounded-md bg-sky-800 bg-opacity-0 p-2 text-cyan-100 hover:bg-opacity-100 focus:outline-none focus:ring-2 focus:ring-white"
                x-on:click="open = !open" @click="toggle" @mousedown="if (open) $event.preventDefault()"
                aria-expanded="false" :aria-expanded="open.toString()">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/bars-3" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </button>
        </div>
    </div>
    <div class="hidden space-x-10 ltr:lg:ml-10 rtl:lg:mr-10  lg:flex rtl:lg:flex-row-reverse">

        @auth
            <a wire:navigate href="{{ route('create_project') }}"
                class="text-base font-medium text-white hover:text-cyan-100">{{ __('Create Project') }}</a>
            <a href="{{ route('send_email') }}"
                class="text-base font-medium text-white hover:text-cyan-100">{{ __('Mail') }}</a>
        @endauth

        <a href="#"
            class="projects-nav-link text-base font-medium text-white hover:text-cyan-100">{{ __('Projects') }}</a>

        <a href="#"
            class="newsletter-nav-link text-base font-medium text-white hover:text-cyan-100">{{ __('News Letter') }}</a>
        @if ($home)
            <a href="{{ route('contact') }}"
                class="text-base font-medium text-white hover:text-cyan-100">{{ __('Contact') }}</a>
        @else
            <a href="{{ route('home') }}"
                class="text-base font-medium text-white hover:text-cyan-100">{{ __('Home') }}</a>
        @endif

        <div>
            <div>
                <a href="?lang=ar" class="flag-icon flag-icon-sa mx-1"></a>
                <a href="?lang=en" class="flag-icon flag-icon-us mx-1"></a>

            </div>
        </div>


    </div>

    @if (!Auth::check())
        <div class="flex items-center gap-4">
            <x-dialog wire:model="show">
                <x-dialog.open>
                    <div class="hidden lg:flex lg:items-center lg:space-x-6">
                        <a href="#" class=" py-2 text-base font-medium text-gray-500 ">{{ __('Sign Up') }}</a>

                    </div>
                </x-dialog.open>

                <x-dialog.panel>
                    <livewire:signup />
                </x-dialog.panel>
            </x-dialog>
            <x-dialog wire:model="show">
                <x-dialog.open>
                    <div class="hidden lg:flex lg:items-center lg:space-x-6">
                        <a href="#"
                            class="rounded-md border border-transparent bg-white bg-opacity-10 py-2 px-6 text-base font-medium text-white hover:bg-opacity-20">{{ __('Log in') }}</a>

                    </div>
                </x-dialog.open>

                <x-dialog.panel>
                    <livewire:login />
                </x-dialog.panel>
            </x-dialog>
        </div>
    @else
        <x-dialog wire:model="show">
            <x-dialog.open>
                <div class="hidden lg:flex lg:items-center lg:space-x-6">
                    <button type='button' href="#"
                        class="rounded-md border border-transparent bg-white bg-opacity-10 py-2 px-6 text-base font-medium text-white hover:bg-opacity-20">{{ __('Log out') }}</button>
                </div>
            </x-dialog.open>

            <x-dialog.panel>
                <livewire:logout />
            </x-dialog.panel>
        </x-dialog>
    @endif
</nav>
