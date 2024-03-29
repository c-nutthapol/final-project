<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') . ' |' }} @yield('title')
        @hasSection('subtitle')
            | @yield('subtitle')
        @endif
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    {{-- <script src="{{ mix('resources/js/app.js') }}" defer></script> --}}
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
    <script>
        $("a[target=popup]").click(function() {
            let href = $(this).prop('href');
            window.open(href, 'popup', 'width=600,height=600,scrollbars=yes');
        });

        window.addEventListener("redirect_page", (event) => {
            let url = event.detail.url
            let delay = event.detail.delay ?? 2000
            setTimeout(function() {
                window.location = url;
            }, delay);
        });
    </script>
</body>

</html>
