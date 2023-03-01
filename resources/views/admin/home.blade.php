@extends('layouts.admin.app')

@section('title', 'หน้าหลัก')

@section('content')
    <div>
        @livewire('admin.home.operational')

        <div class="mt-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-7">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-secondary">
                            คำขอเป็นผู้สอน
                        </h2>
                        <a href="#" class="text-sm font-medium text-primary">
                            ดูทั้งหมด
                        </a>
                    </div>

                    @livewire('admin.home.request-lecturer')
                </div>
                @livewire('admin.home.courses')
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script></script>
@endsection
