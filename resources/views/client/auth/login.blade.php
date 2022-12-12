<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }} | เข้าสู่ระบบ</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.client.partials.header')
    @livewireStyles()
</head>

<body>

    <section class="relative flex items-center justify-center h-screen">
        <div class="relative z-10 ">
            <!--------- Logo  ---------->
            <div class="flex items-center justify-center mb-12" data-aos="fade-down" data-aos-dura tion="800"
                data-aos-once="true">
                <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-10 mr-3" />
                <h1 class="mb-0 text-xl font-bold tracking-wide font-montserrat text-primary">
                    D-Course
                </h1>
            </div>
            <!--------- Card login  ---------->
            <div class="p-10 bg-white shadow-card-auth w-[28.75rem] rounded-2xl font-ibm" data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">
                <!--------- Card Title  ---------->
                <h2 class="mb-12 text-2xl font-extrabold tracking-wide text-dark-theme">
                    เข้าสู่ระบบ
                </h2>

                <!--------- Card Form  ---------->
                @livewire('client.auth.login')

            </div>
            <!--------- Register  ---------->
            <div class="mt-6 text-center font-montserrat" data-aos="fade-up" data-aos-delay="150"
                data-aos-duration="1200" data-aos-once="true">
                <p class="text-sm font-normal tracking-wide text-secondary">
                    ถ้าคุณไม่มีบัญชี?
                    <a href="{{ route('client.auth.register') }}"
                        class="pl-1 font-semibold underline text-dark-theme-80 hover:text-primary active:text-primary">สมัครสมาชิก</a>
                </p>
            </div>
        </div>

        <!--------- Wave  ---------->
        <img src="{{ asset('assets/images/wave-login.svg') }}" class="absolute bottom-0 left-0 z-0 w-full" />
        <!--------- Tree left  ---------->
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 left-10 w-28" />
        <img src="{{ asset('assets/images/icons/tree-md-color.svg') }}" class="absolute bottom-0 w-8 left-64" />
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 left-[32rem] w-28" />
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 left-[42rem] w-20" />
        <!--------- Tree Right  ---------->
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 right-20 w-28" />
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 w-20 right-64" />
        <img src="{{ asset('assets/images/icons/tree-md-color.svg') }}" class="absolute bottom-0 w-8 right-[30rem]" />
    </section>

    @livewireScripts()
    @include('layouts.client.partials.script')

</body>

</html>
