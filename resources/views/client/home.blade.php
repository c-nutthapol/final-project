@extends('layouts.client.app')

@section('title', 'หน้าหลัก')

@section('content')
    <!--------- Hero  ---------->
    <header class="h-[40rem] relative overflow-hidden bg-white">
        <img src="{{ asset('assets/images/icons/icon-edu.svg') }}" class="absolute z-0 w-auto h-auto top-2 right-6"
            data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" data-aos-once="true" />
        <!--------- Content ---------->
        <div class="container relative z-10 flex items-center justify-center h-full mx-auto">
            <div class="text-center font-montserrat">
                <h1 class="mb-8 text-6xl font-extrabold tracking-wide text-secondary" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    Learn your way through education.
                </h1>
                <h2 class="text-6xl font-extrabold tracking-wide text-primary-80" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="1400" data-aos-once="true">
                    Information Technology
                </h2>
            </div>
        </div>
        <!--------- Icon Books  ---------->
        <img src="{{ asset('assets/images/icons/icon-book-blue.svg') }}"
            class="absolute left-0 z-0 w-auto h-auto -bottom-36" data-aos="fade-right" data-aos-duration="1000"
            data-aos-once="true" />
        <img src="{{ asset('assets/images/icons/icon-book-gray.svg') }}" class="absolute bottom-0 z-0 w-auto h-auto left-60"
            data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" />
        <!--------- Icon Tree  ---------->
        <img src="{{ asset('assets/images/icons/tree-lg-op.svg') }}" class="absolute bottom-0 z-0 w-auto h-auto right-20"
            data-aos="zoom-in-up" data-aos-duration="2000" data-aos-once="true" />
        <img src="{{ asset('assets/images/icons/tree-md.svg') }}" class="absolute bottom-0 z-0 w-auto h-auto right-64"
            data-aos="zoom-in-up" data-aos-duration="1000" data-aos-once="true" />
        <img src="{{ asset('assets/images/icons/tree-md.svg') }}" class="absolute bottom-0 z-0 w-10 right-96"
            data-aos="zoom-in-up" data-aos-duration="1000" data-aos-once="true" />
    </header>

    <!--------- Content  ---------->
    <main class="bg-primary-20/[0.2] overflow-hidden">
        <div class="relative lg:pb-72">
            <!--------- Courses  ---------->
            <div class="relative z-10 font-montserrat">
                <div class="container px-3 py-24 mx-auto lg:px-6">
                    <!--------- Title  ---------->
                    <h1 class="mb-12 text-3xl font-bold tracking-wide text-center text-secondary font-ibm"
                        data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" data-aos-once="true">
                        คอร์สเรียนแนะนำ
                    </h1>

                    @livewire('client.home')
                </div>
            </div>
            <!--------- Wave  ---------->
            <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
        </div>
    </main>
@endsection
@section('script')
    <script>
        // const player = new Plyr('#player', plyrDefaults);

        // player.on('ready', (event) => {
        //     const instance = event.detail.plyr;
        //     console.log(event.detail.plyr.currentTime);
        // });

        // setInterval(() => {
        //     console.log(player.currentTime);
        // }, 1000);
    </script>
@endsection
