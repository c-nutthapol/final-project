@extends('client.teacher.course.layout')

@section('title', 'ผู้ลงทะเบียนเรียนทั้งหมด')

@section('teacher.content')
    @livewire('client.teacher.course.students', ['id' => $id])
@endsection
