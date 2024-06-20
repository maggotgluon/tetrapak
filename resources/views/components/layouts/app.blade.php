@extends('layouts.base')

@section('body')
    @yield('content')
    <main class="container max-w-screen-sm min-h-full m-auto p-4">
    @isset($slot)
        {{ $slot }}
    @endisset
    </main>
@endsection
