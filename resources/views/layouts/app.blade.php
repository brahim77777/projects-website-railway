<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @yield('styles')
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/@alpinejs/ui@3.13.2-beta.0/dist/cdn.min.js"></script>

</head>

<body>
    @yield('content')




    @yield('scripts')

</body>

</html>
