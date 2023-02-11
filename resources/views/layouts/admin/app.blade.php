<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
    @include('layouts.admin.partials.header')
</head>

<body>
    <div class="relative flex flex-row justify-start h-screen overflow-x-auto font-ibm bg-primary-20/30">
        @include('layouts.admin.partials.sidebar')

        <main class="flex-1 w-full">
            <div class="flex flex-col h-full break-all">
                @include('layouts.admin.partials.nav')

                <!-- Content -->
                <div class="ml-6 p-7">
                    @yield('content')
                </div>
            </div>
        </main>


        @include('layouts.admin.partials.footer')
    </div>
    @include('layouts.admin.partials.script')
    @livewireScripts
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    @yield('script')

    @stack('script')
</body>

</html>
