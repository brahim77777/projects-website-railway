@extends('layouts.app')
@section('content')
    @if (session('mail_status'))
        <div style="background: #0e7490;" class=" border-l-4 border-green-500 text-teal-500  p-4" role="alert">
            <p class="font-bold">{{ __('Sending') }}</p>
            <p class="text-white">{{ __(session('mail_status')) }}</p>
        </div>
    @endif
    <x-tailwind-css :projects="$projects" />
@endsection


@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/css/flag-icon.min.css">
@endsection
@section('scripts')
    <script>
        function gotoProject(link1 = '', link2 = '') {
            let link = ''

            link1 == '' ? link = link2 : link = link1;
            link != '' ? window.open(link, '_blank') : null;
        }



        document.querySelectorAll('.projects-nav-link').forEach((ele) => {
            ele.addEventListener('click', function(event) {
                event.preventDefault();
                setTimeout(
                    document.querySelector('#projects-heading').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start',
                        inline: 'nearest'
                    }), 500)

            });
        })


        document.querySelectorAll('.newsletter-nav-link').forEach((ele) => {
            ele.addEventListener('click', function(event) {
                event.preventDefault();
                setTimeout(() => {
                    document.getElementById('email-address').focus()
                }, 1000)

                setTimeout(

                    document.getElementById('newsletter').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start',
                        inline: 'nearest'
                    }), 2000)
            });
        })
    </script>
@endsection
