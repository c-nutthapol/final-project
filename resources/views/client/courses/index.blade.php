@extends('layouts.client.app')

@section('title', 'หลักสูตร')

@section('content')
    <!--------- Content  ---------->
    <main class="relative overflow-hidden bg-white lg:pb-72">
        <!--------- Heading  ---------->
        <div class="h-[25rem] relative bg-primary-20/20">
            <!--------- Blobs left ---------->
            <img src="{{ asset('assets/images/icons/blobs-left.svg') }}" class="absolute z-0 w-80 -top-28 -left-10" />
            <!--------- Blobs right ---------->
            <img src="{{ asset('assets/images/icons/blobs-right.svg') }}" class="absolute z-0 w-96 -top-20 -right-10" />
            <!--------- Content ---------->
            <div class="container relative z-10 flex items-center justify-center h-full mx-auto">
                <div class="text-center font-ibm">
                    <h1 class="mb-0 text-6xl font-extrabold tracking-widest text-secondary" data-aos="fade-up"
                        data-aos-delay="200" data-aos-duration="1000">
                        คอร์สเรียนทั้งหมด
                    </h1>
                </div>
            </div>
        </div>

        <!--------- Courses  ---------->
        <div class="container relative z-10 px-3 py-24 mx-auto lg:px-6 font-montserrat">
            @livewire('client.courses.search')

            @livewire('client.courses.item')
        </div>

        <!--------- Dots top left ---------->
        <img src="{{ asset('assets/images/icons/dots.svg') }}" class="absolute w-36 top-52 -left-10" />

        <!--------- Dots top right ---------->
        <img src="{{ asset('assets/images/icons/dots.svg') }}" class="absolute w-36 top-[36rem] -right-20" />

        <!--------- Dots right ---------->
        <img src="{{ asset('assets/images/icons/dots.svg') }}" class="absolute z-0 w-36 bottom-64 -left-20" />

        <!--------- Wave  ---------->
        <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
    </main>
@endsection
