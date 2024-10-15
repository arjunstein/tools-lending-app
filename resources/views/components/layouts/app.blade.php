<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ config('app.name') . ' - ' . $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body class="antialiased bg-slate-100">

    {{-- Navbar  --}}
    @include('components.layouts._partials.navs')
    {{-- Navbar end --}}

    {{-- Sidebar  --}}
    @include('components.layouts._partials.sidebar')
    {{-- Sidebar end --}}

    <div class="p-4 sm:ml-64">

        {{ $slot }}

    </div>


    @livewireScripts
</body>

</html>
