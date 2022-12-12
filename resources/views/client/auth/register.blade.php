<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }} | สมัครสมาชิก</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    @include('layouts.client.partials.header')
    @livewireStyles()
</head>

<body>

    <section class="relative flex items-center justify-center h-full py-20">
        <div class="relative z-10">
            <!--------- Logo  ---------->
            <div class="flex items-center justify-center mb-12" data-aos="fade-down" data-aos-duration="800"
                data-aos-once="true">
                <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-10 mr-3" />
                <h1 class="mb-0 text-xl font-bold tracking-wide font-montserrat text-primary">
                    D-Course
                </h1>
            </div>
            <!--------- Card Register  ---------->
            <div class="p-10 bg-white shadow-card-auth w-[28.75rem] rounded-2xl font-ibm" data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">
                <!--------- Card Title  ---------->
                <h2 class="mb-12 text-2xl font-extrabold tracking-wide text-dark-theme">
                    สมัครสมาชิก
                </h2>

                <!--------- Card Form  ---------->
                @livewire('client.auth.register')
            </div>
            <!--------- Login  ---------->
            <div class="mt-6 text-center font-ibm">
                <p class="text-sm font-normal tracking-wide text-secondary">
                    ถ้าคุณมีบัญชีอยู่แล้ว?
                    <a href="{{ route('client.auth.login') }}"
                        class="pl-1 font-semibold underline text-dark-theme-80 hover:text-primary active:text-primary">เข้าสู่ระบบ</a>
                </p>
            </div>
        </div>

        <div class="absolute inset-x-0 bottom-0 w-1/2 mx-auto h-1/3 bg-primary-40/20 rounded-t-3xl" data-aos="fade-up"
            data-aos-duration="600" data-aos-once="true"></div>
    </section>

    @livewireScripts()
    @include('layouts.client.partials.script')
</body>

</html>
