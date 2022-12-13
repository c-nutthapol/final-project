@extends('layouts.client.app')

@section('title', 'จัดการคอร์สเรียน')

@section('content')
    <!--------- Content  ---------->
    <main class="bg-primary-20/[0.2]">
        <div class="relative pt-24 lg:pb-96">
            <div class="absolute top-0 left-0 z-0 w-full bg-primary-20/25 h-60"></div>
            <div class="container relative z-10 mx-auto">
                <h2 class="mb-6 text-2xl font-medium font-ibm text-secondary">
                    จัดการคอร์สเรียน
                </h2>

                <div class="grid grid-cols-12 gap-y-3 gap-x-10">
                    <!--------- Filters  ---------->
                    @livewire('client.teacher.filters')
                    <!--------- Courses  ---------->
                    @livewire('client.teacher.courses')
                </div>
            </div>

            <!--------- Wave  ---------->
            <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
        </div>

        <!-- Create Course modal -->
        @livewire('client.teacher.create-course')
    </main>
@endsection
