@extends('client.teacher.course.layout')

@section('title', 'ผู้ลงทะเบียนเรียนทั้งหมด')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8">
        @livewire('client.teacher.course.reviews', ['id' => $id])
    </div>
@endsection
