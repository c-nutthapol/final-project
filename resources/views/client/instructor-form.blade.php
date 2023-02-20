@extends('layouts.client.app')

@section('title', 'หน้าหลัก')

@section('content')
    <!--------- Content  ---------->
    <main class="relative overflow-hidden bg-primary-20/[0.2] lg:pb-72">
        <div class="container py-64 mx-auto">
            @livewire('client.instructor-form')
        </div>


        <!--------- Wave  ---------->
        <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
    </main>
@endsection
