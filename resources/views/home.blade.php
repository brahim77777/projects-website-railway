@extends('layouts.app')
@section('content')
    <x-tailwind-css :projects="$projects" />
@endsection

@section('scripts')
    <script>
        function gotoProject(link1 = '', link2 = '') {
            let link = ''

            link1 == '' ? link = link2 : link = link1;
            link != '' ? window.open(link, '_blank') : null;
        }
    </script>
@endsection
