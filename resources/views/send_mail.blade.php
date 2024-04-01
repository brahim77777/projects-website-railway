@extends('layouts.app')


@section('content')
    <livewire:send-mail />
@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.4/dist/quill.snow.css" rel="stylesheet" />
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.4/dist/quill.js"></script>
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
@endsection
