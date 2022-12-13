<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') . ' |' }} @yield('title') @yield('subtitle')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    @livewireStyles
    @include('layouts.client.partials.header')
</head>

<body>
    @include('layouts.client.partials.nav')
    {{-- @include('layouts.client.partials.sidebar') --}}

    @yield('content')

    @include('layouts.client.partials.footer')
    @include('layouts.client.partials.script')

    @livewireScripts
    @yield('script')

    @stack('script')
</body>

</html>
