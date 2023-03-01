@extends('layouts.admin.app')

@section('title', 'ข้อมูลผู้สอน')

@section('content')
    <div>
        <!-- Page Title -->
        <h2 class="mb-6 text-2xl font-bold tracking-wide text-secondary">
            คำขอเป็นผู้สอนทั้งหมด
        </h2>


        @livewire('admin.instructor.table')

        <!-- Status Modal -->
        @livewire('admin.instructor.change-status')
    </div>
@endsection
@section('script')
    <script></script>
@endsection
