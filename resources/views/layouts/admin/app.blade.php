<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    @livewireStyles
    @include('layouts.admin.partials.header')
</head>

<body>
    @include('layouts.admin.partials.nav')
    @include('layouts.admin.partials.sidebar')

    @yield('content')

    @include('layouts.admin.partials.footer')
    @include('layouts.admin.partials.script')

    @livewireScripts
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    @yield('script')

    @stack('script')
</body>

</html>
