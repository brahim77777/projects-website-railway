@extends('layouts.app')
@section('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
@endsection

@section('content')
    <div class="bg-gray-50 min-h-screen">
        <header class="bg-green-900 opacity-1 text-white">
            <x-nav-bar home="true" />


        </header>

        <main class="container mx-auto px-4 py-8">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-64 w-full object-cover md:w-64" src="https://images.websim.ai/v1/ecotech-website.jpg"
                            alt="Screenshot of EcoTech Solutions website homepage" width="256" height="256">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-green-500 font-semibold">Featured Project</div>
                        <h2 class="block mt-1 text-2xl leading-tight font-bold text-black">EcoTech Solutions Website</h2>
                        <p class="mt-4 text-gray-500">A cutting-edge, eco-friendly website designed to showcase sustainable
                            technologies and promote green initiatives. Built with performance and accessibility in mind.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Key Features</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Responsive design for all devices
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Optimized for low carbon footprint
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Interactive product showcases
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Integrated blog for eco-tips
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Technologies Used</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm font-medium">HTML5</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">CSS3</span>
                        <span
                            class="px-3 py-1 bg-yellow-100 text-yellow-600 rounded-full text-sm font-medium">JavaScript</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-medium">React</span>
                        <span class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-medium">Node.js</span>
                        <span
                            class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm font-medium">GraphQL</span>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Project Highlights</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-medium text-lg text-gray-900 mb-2">Performance Metrics</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                98/100 Google PageSpeed Score
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                0.8s Average Load Time
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                WCAG 2.1 AA Compliant
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-medium text-lg text-gray-900 mb-2">Environmental Impact</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                0.12g CO2 per page view
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Green Hosting Provider
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Optimized Images & Assets
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#"
                    class="inline-block px-6 py-3 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition duration-300 ease-in-out">
                    View Live Demo
                </a>
            </div>
        </main>

        <footer class="bg-gray-800 text-white mt-16">
            <div class="container mx-auto px-4 py-8">
                <p class="text-center">&copy; 2023 Your Web Design Studio. All rights reserved.</p>
            </div>
        </footer>
    </div>
@endsection
