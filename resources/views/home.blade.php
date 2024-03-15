<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Modals</title>

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/@alpinejs/ui@3.13.2-beta.0/dist/cdn.min.js"></script>

</head>

<body>
    <x-tailwind-css :projects="$projects" />


    <script>
        function gotoProject(link1 = '', link2 = '') {
            let link = ''

            link1 == '' ? link = link2 : link = link1;
            link != '' ? window.open(link, '_blank') : null;
        }
    </script>
</body>

</html>
