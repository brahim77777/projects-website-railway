@extends('layouts.app')
@section('styles')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
@endsection
@section('content')
    <!--
                                                                                                                                                                                                                                                  This example requires Tailwind CSS v2.0+

                                                                                                                                                                                                                                                  The alpine.js code is *NOT* production ready and is included to preview
                                                                                                                                                                                                                                                  possible interactivity
                                                                                                                                                                                                                                                -->
    <div>
        <div class="bg-white ">
            <header class="relative bg-sky-800 pb-24 sm:pb-32">
                <div class="absolute inset-0">
                    <img class="h-full w-full object-cover"
                        src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=60&amp;&amp;sat=-100"
                        alt="">
                    <div class="absolute inset-0 bg-gradient-to-l from-sky-800 to-cyan-700 mix-blend-multiply"
                        aria-hidden="true"></div>
                </div>
                <div class="relative z-10" x-data="{ open: false, focus: true }" x-init="init()" @keydown.escape="onEscape"
                    @close-popover-group.window="onClosePopoverGroup">
                    <x-nav-bar :home="$home" />


                    <div x-cloak x-show="open" x-transition:enter="duration-150 ease-out"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        x-description="Mobile menu, show/hide based on menu open state."
                        class="absolute inset-x-0 top-0 origin-top transform p-2 transition lg:hidden" x-ref="panel"
                        @click.away="open = false">
                        <div class="overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="flex items-center justify-between px-5 pt-4">
                                <div>
                                    <img class="h-8 w-auto"
                                        src="https://tailwindui.com/img/logos/mark.svg?color=emerald&amp;shade=400"
                                        alt="">
                                </div>
                                <div class="ltr:-mr-2 rtl:-ml-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-warm-gray-400 hover:bg-warm-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500"
                                        x-on:click="open = !open" @click="toggle">
                                        <span class="sr-only">Close menu</span>
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x-mark"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="pt-5 pb-6">
                                <div class="space-y-1 px-2">
                                    @auth

                                        <a href="{{ route('create_project') }}" wire:navigate
                                            class="block rounded-md px-3 py-2 text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50">{{ __('Create Project') }}</a>

                                        <a href="{{ route('send_email') }}"
                                            class="block rounded-md px-3 py-2 text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50">{{ __('Mail') }}</a>
                                    @endauth


                                    <a href="#"
                                        class="projects-nav-link block rounded-md px-3 py-2 text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50">{{ __('Projects') }}</a>

                                    <a href="#"
                                        class="newsletter-nav-link block rounded-md px-3 py-2 text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50">{{ __('News Letter') }}</a>


                                    <div
                                        class="flex gap-2 rounded-md px-3 py-2 text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50 ">
                                        <span>{{ __('Language') }} </span>
                                        <a class="flag-icon flag-icon-us mx-1" href="?lang=en"></a>
                                        <a class=" flag-icon flag-icon-sa mx-1" href="?lang=ar"></a>
                                    </div>

                                </div>
                                <div class="mt-6 px-5 ">

                                    @if (!Auth::check())
                                        <x-dialog wire:model="show">
                                            <x-dialog.open>
                                                <div class=" lg:flex lg:items-center lg:space-x-6">
                                                    <button type="button"
                                                        class="block w-full  rounded-md border border-transparent bg-green-400 py-2 px-4 text-center font-medium text-white shadow hover:bg-green-500 mb-4">{{ __('Sign Up') }}</button>
                                                </div>
                                            </x-dialog.open>

                                            <x-dialog.panel>
                                                <livewire:signup />
                                            </x-dialog.panel>
                                        </x-dialog>
                                        <x-dialog wire:model="show">
                                            <x-dialog.open>
                                                <div class=" lg:flex lg:items-center lg:space-x-6">
                                                    <button type="button"
                                                        class="block w-full  rounded-md border border-transparent bg-green-400 py-2 px-4 text-center font-medium text-white shadow hover:bg-green-500">{{ __('Login') }}</button>
                                                </div>
                                            </x-dialog.open>

                                            <x-dialog.panel>
                                                <livewire:login />
                                            </x-dialog.panel>
                                        </x-dialog>
                                    @else
                                        <x-dialog wire:model="show">
                                            <x-dialog.open>
                                                <div class=" lg:flex lg:items-center lg:space-x-6">
                                                    <button type="button"
                                                        class="block w-full  rounded-md border border-transparent bg-green-400 py-2 px-4 text-center font-medium text-white shadow hover:bg-green-500">{{ __('Log out') }}</button>
                                                </div>
                                            </x-dialog.open>

                                            <x-dialog.panel>
                                                <livewire:logout />
                                            </x-dialog.panel>
                                        </x-dialog>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="relative mx-auto mt-24 max-w-md px-4 sm:mt-32 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                        {{ __(env('WEBSITE_OWNER', 'COMPANY NAME')) }}</h1>
                    <p class="mt-6 max-w-3xl text-xl text-cyan-100">
                        {{ __(env('WEBSITE_DESCRIPTION', 'COMPANY DESCRIPTION')) }}<br>
                        {{ __(env('WEBSITE_SUB_DESCRIPTION', 'COMPANY SUB DESCRIPTION')) }}
                    </p>
                </div>
            </header>

            <main>
                <!-- Side-by-side grid -->
                <div class="bg-white">
                    <div class="mx-auto max-w-md py-24 px-4 sm:max-w-3xl sm:py-32 sm:px-6 lg:max-w-7xl lg:px-8">
                        <div class="divide-y divide-warm-gray-200">
                            {{-- <section class="lg:grid lg:grid-cols-3 lg:gap-8" aria-labelledby="contact-heading">
                            <h2 id="contact-heading"
                                class="text-2xl font-bold text-warm-gray-900 sm:text-3xl sm:tracking-tight">
                                {{ __('Get in touch') }}</h2>
                            <div
                                class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:col-span-2 lg:mt-0">

                                <div>
                                    <h3 class="text-lg font-medium text-warm-gray-900">{{ __('Contact') }}</h3>
                                    <dl class="mt-2 text-base text-warm-gray-500">
                                        <div>
                                            <dt class="sr-only">Email</dt>
                                            <dd>{{ env('WEBSITE_CONTACT_EMAIL', 'COMPANY EMAIL') }}</dd>
                                        </div>
                                        <div class="mt-1">
                                            <dt class="sr-only">Phone number</dt>
                                            <dd>+212 697523757</dd>
                                        </div>
                                    </dl>
                                </div>

                                <div>
                                    <h3 class="text-lg font-medium text-warm-gray-900">Press</h3>
                                    <dl class="mt-2 text-base text-warm-gray-500">
                                        <div>
                                            <dt class="sr-only">Email</dt>
                                            <dd>support@example.com</dd>
                                        </div>
                                        <div class="mt-1">
                                            <dt class="sr-only">Phone number</dt>
                                            <dd>+1 (555) 123-4567</dd>
                                        </div>
                                    </dl>
                                </div>

                                <div>
                                    <h3 class="text-lg font-medium text-warm-gray-900">Join our team</h3>
                                    <dl class="mt-2 text-base text-warm-gray-500">
                                        <div>
                                            <dt class="sr-only">Email</dt>
                                            <dd>support@example.com</dd>
                                        </div>
                                        <div class="mt-1">
                                            <dt class="sr-only">Phone number</dt>
                                            <dd>+1 (555) 123-4567</dd>
                                        </div>
                                    </dl>
                                </div>

                                <div>
                                    <h3 class="text-lg font-medium text-warm-gray-900">Say hello</h3>
                                    <dl class="mt-2 text-base text-warm-gray-500">
                                        <div>
                                            <dt class="sr-only">Email</dt>
                                            <dd>support@example.com</dd>
                                        </div>
                                        <div class="mt-1">
                                            <dt class="sr-only">Phone number</dt>
                                            <dd>+1 (555) 123-4567</dd>
                                        </div>
                                    </dl>
                                </div>

                            </div>
                        </section> --}}
                            @if (env('WEBSITE_LOCATION_SECTION', false))
                                <section class="mt-16 pt-16 lg:grid lg:grid-cols-3 lg:gap-8"
                                    aria-labelledby="location-heading">
                                    <h2 id="location-heading"
                                        class="text-2xl font-bold text-warm-gray-900 sm:text-3xl sm:tracking-tight">
                                        Locations
                                    </h2>
                                    <div
                                        class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:col-span-2 lg:mt-0">

                                        <div>
                                            <h3 class="text-lg font-medium text-warm-gray-900">Los Angeles</h3>
                                            <div class="mt-2 space-y-1 text-base text-warm-gray-500">

                                                <p>4556 Brendan Ferry</p>

                                                <p>Los Angeles, CA 90210</p>

                                            </div>
                                        </div>

                                        <div>
                                            <h3 class="text-lg font-medium text-warm-gray-900">New York</h3>
                                            <div class="mt-2 space-y-1 text-base text-warm-gray-500">

                                                <p>886 Walter Streets</p>

                                                <p>New York, NY 12345</p>

                                            </div>
                                        </div>

                                        <div>
                                            <h3 class="text-lg font-medium text-warm-gray-900">Toronto</h3>
                                            <div class="mt-2 space-y-1 text-base text-warm-gray-500">

                                                <p>7363 Cynthia Pass</p>

                                                <p>Toronto, ON N3Y 4H8</p>

                                            </div>
                                        </div>

                                        <div>
                                            <h3 class="text-lg font-medium text-warm-gray-900">Chicago</h3>
                                            <div class="mt-2 space-y-1 text-base text-warm-gray-500">

                                                <p>726 Mavis Island</p>

                                                <p>Chicago, IL 60601</p>

                                            </div>
                                        </div>

                                    </div>
                                </section>
                            @endif

                        </div>





                        <div class="svg+form flex  justify-center">
                            <div
                                class="max-w-4xl mx-4 w-full bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row">

                                <div class="bg-green-500 text-white p-8 md:w-1/2 flex flex-col justify-center">
                                    <h2 class="text-4xl font-bold mb-4">{{ __('Get in Touch') }}</h2>
                                    <p class="text-lg mb-6">{{ __("We'd love to hear from you.") }}
                                    </p>

                                    <div class="flex items-center mb-4">
                                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                            </path>
                                        </svg>
                                        <span>+212 (697) 523-757</span>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <span>
                                            bazi.brahim.777@gmail.com
                                        </span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>{{ __('Morocco Laayoune block i N°461') }}</span>
                                    </div>
                                </div>
                                <div class="p-8 md:w-1/2">
                                    <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ __('Send us a message') }}</h2>
                                    <form action="{{ route('contact_form') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="name"
                                                class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}</label>
                                            <input type="text" id="name" name="name"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                                required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="email"
                                                class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email') }}</label>
                                            <input type="email" id="email" name="email"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                                required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="message"
                                                class="block text-gray-700 text-sm font-bold mb-2">{{ __('Message') }}</label>
                                            <textarea id="message" name="message" rows="4"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                                required></textarea>
                                        </div>
                                        <button type="submit"
                                            class="w-full bg-green-500 text-white font-bold py-2 px-4 rounded-md hover:bg-green-600 transition duration-300">
                                            {{ __('Send Message') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </div>

        <!-- FAQ -->



        <!-- <div class="bg-warm-gray-50">
                                                                                                                                                                                                                                                    <div class="mx-auto max-w-md py-24 px-4 sm:max-w-3xl sm:py-32 sm:px-6 lg:max-w-7xl lg:px-8">
                                                                                                                                                                                                                                                      <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                          <h2 class="text-3xl font-bold tracking-tight text-warm-gray-900">Frequently asked questions</h2>
                                                                                                                                                                                                                                                          <p class="mt-4 text-lg text-warm-gray-500">Can’t find the answer you’re looking for? Reach out to our <a href="#" class="font-medium text-cyan-700 hover:text-cyan-600">customer support</a> team.</p>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                        <div class="mt-12 lg:col-span-2 lg:mt-0">
                                                                                                                                                                                                                                                          <dl class="space-y-12">

                                                                                                                                                                                                                                                              <div>
                                                                                                                                                                                                                                                                <dt class="text-lg font-medium text-warm-gray-900">How do you make holy water?</dt>
                                                                                                                                                                                                                                                                <dd class="mt-2 text-base text-warm-gray-500">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
                                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                                              <div>
                                                                                                                                                                                                                                                                <dt class="text-lg font-medium text-warm-gray-900">What's the best thing about Switzerland?</dt>
                                                                                                                                                                                                                                                                <dd class="mt-2 text-base text-warm-gray-500">I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
                                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                                              <div>
                                                                                                                                                                                                                                                                <dt class="text-lg font-medium text-warm-gray-900">What do you call someone with no body and no nose?</dt>
                                                                                                                                                                                                                                                                <dd class="mt-2 text-base text-warm-gray-500">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
                                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                                              <div>
                                                                                                                                                                                                                                                                <dt class="text-lg font-medium text-warm-gray-900">Why do you never see elephants hiding in trees?</dt>
                                                                                                                                                                                                                                                                <dd class="mt-2 text-base text-warm-gray-500">Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
                                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                                          </dl>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                  </div> -->

        <!-- Newsletter -->


        </main>
        <footer class="bg-white" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-md py-12 px-4 sm:max-w-3xl sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-8 xl:col-span-1">
                        <img class="h-10" src="https://tailwindui.com/img/logos/mark.svg?color=emerald&amp;shade=400"
                            alt="Company name">
                        <p class="text-base text-warm-gray-500">Making the world a better place through
                            constructing
                            elegant hierarchies.</p>
                        <div class="flex space-x-6">

                            <a href="{{ env('FACEBOOK_URL', '#') }}"
                                class="text-warm-gray-400 hover:text-warm-gray-500 rtl:ml-6 ">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>

                            <a href="{{ env('INSTAGRAM_URL', '#') }}}"
                                class="text-warm-gray-400 hover:text-warm-gray-500">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>

                            <a href="{{ env('TWITTER_URL', '#') }}" class="text-warm-gray-400 hover:text-warm-gray-500">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                    </path>
                                </svg>

                            </a>

                            <a href="{{ env('GITHUB_URL', '#') }}" class="text-warm-gray-400 hover:text-warm-gray-500">
                                <span class="sr-only">GitHub</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>



                        </div>
                    </div>
                    @if (env('WEBSITE_ADVANCED_FOOTER', false))
                        <div class="mt-12 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                            <div class="md:grid md:grid-cols-2 md:gap-8">
                                <div>
                                    <h3 class="text-base font-medium text-warm-gray-700">Solutions</h3>
                                    <ul role="list" class="mt-4 space-y-4">

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Marketing</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Analytics</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Commerce</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Insights</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="mt-12 md:mt-0">
                                    <h3 class="text-base font-medium text-warm-gray-700">Support</h3>
                                    <ul role="list" class="mt-4 space-y-4">

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Pricing</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Documentation</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Guides</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">API
                                                Status</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="md:grid md:grid-cols-2 md:gap-8">
                                <div>
                                    <h3 class="text-base font-medium text-warm-gray-700">Company</h3>
                                    <ul role="list" class="mt-4 space-y-4">



                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Blog</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Jobs</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Press</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class=" text-base text-warm-gray-500 hover:text-warm-gray-900">{{ __('Projects') }}</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="mt-12 md:mt-0">
                                    <h3 class="text-base font-medium text-warm-gray-700">Legal</h3>
                                    <ul role="list" class="mt-4 space-y-4">

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Claim</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Privacy</a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="text-base text-warm-gray-500 hover:text-warm-gray-900">Terms</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="mt-12 border-t border-warm-gray-200 pt-8">
                    <p class="text-base text-warm-gray-400 text-center ">
                        {{ __('© 2024 ' . env('APP_NAME', 'YOUR COMPANY') . ', Inc. All rights reserved.') }} </p>
                </div>
            </div>
        </footer>

    </div>
    </div>

    {{-- THsi si the original 1111 --}}

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endsection
