@extends('client.teacher.course.layout')

@section('title', 'เนื้อหา')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8">
        <div class="max-w-screen-lg p-10 mx-auto overflow-hidden bg-white rounded-xl shadow-card-course font-ibm">
            <div class="flex items-center mb-8 space-x-2">
                @php
                    $decode = Hashids::decode($id);
                    $id = Hashids::encodeHex($decode[0]);
                    $sid = Hashids::encodeHex($decode[1]);
                    $cid = !empty($decode[2]) ? Hashids::encodeHex($decode[2]) : null;
                @endphp
                <a href="{{ route('client.teacher.course.content.index', $id) }}" class="inline-block leading-none"
                    data-popover-target="popover-back-content">
                    <i class="fi fi-rr-arrow-left"></i>
                </a>
                <div data-popover id="popover-back-content" role="tooltip"
                    class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                    <div class="px-3 py-2">
                        <p>กลับไปหน้าเนื้อหา</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>
                <h3 class="text-base font-bold tracking-wide text-secondary">
                    {{ !empty($cid) || !empty($cid) ? 'แก้ไข' : 'เพิ่ม' }}เนื้อหาย่อย
                </h3>
            </div>
            @if (!empty($cid) && Route::currentRouteName() == 'client.teacher.course.content.edit-quiz')
                @livewire('client.teacher.course.content.edit-quiz', ['id' => $id, 'sid' => $sid, 'cid' => $cid])
            @elseif(!empty($cid) && Route::currentRouteName() == 'client.teacher.course.content.edit-ep')
                @livewire('client.teacher.course.content.edit-e-p', ['id' => $id, 'sid' => $sid, 'cid' => $cid])
            @else
                @livewire('client.teacher.course.content.form', ['id' => $id, 'sid' => $sid])
            @endif
        </div>
    </div>
@endsection
