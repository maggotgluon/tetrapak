<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif


        <meta property="og:title" content="มาเล่น Quiz ที่จะบอกว่าคุณเป็นคนช่างเลือกแบบไหนกัน" />
        {{-- <meta property="og:description" content="มาเล่น Quiz ที่จะบอกว่าคุณเป็นคนช่างเลือกแบบไหนกัน" /> --}}
        <meta property="og:type" content="game.quiz" />
        <meta property="og:url" content="{{env('APP_URL')}}" />
        <meta property="og:image" content="{{asset('img/og_image.jpg')}}" />

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
        @wireUiScripts
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="h-screen bg-[#FFF2DC] !font-db_heaventrounded">
        <x-notifications z-index="z-50" />
        @yield('body')
    </body>
</html>
