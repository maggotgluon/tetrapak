@extends('layouts.base')

@section('body')
    @yield('content')
    <main class="container max-w-md screen-sm min-h-full m-auto">
    @isset($slot)
        {{ $slot }}
    @endisset
    </main>
@endsection
