@extends('client.teacher.course.layout')

@section('title', 'ภาพรวม')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8">
        <div class="grid grid-cols-12 gap-y-3 gap-x-10">
            <div class="col-span-3">
                @include('client.teacher.course.manage.menu')
            </div>
            <div class="col-span-9">
                <div class="p-10 bg-white rounded-2xl shadow-card-course font-ibm">
                    <!--------- Form  ---------->
                    @livewire('client.teacher.course.manages.overview', ['id' => $id])
                </div>
            </div>
        </div>
    </div>
@endsection
